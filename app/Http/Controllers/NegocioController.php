<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\NegocioRequest;
use App\Models\Negocio;
use App\Models\Usuario;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class NegocioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function login(LoginRequest $request){
    $user = Usuario::where('nick', $request->nick)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
      return response([
        'status' => false,
        'login' => 'El nick o la contraseña son incorrectos']);
    }

    $token = $user->createToken("descuentos")->plainTextToken;

    $negocio_id = DB::table('negocio')
    ->join('usuario', 'usuario.id', '=', 'negocio.usuario_id')
    ->select(
      'negocio.id'
    )
    ->get();
    $response = [
      'status' => true,
      'usuario_id' => $user->id,
      'negocio_id' => $negocio_id[0]->id, 
      'token' => $token
    ];
    return response($response);
  }

  public function logout(Request $request){
    $messages = [
      'required' => 'El campo :attribute es obligatorio'
    ];
    $request->validate([
      'usuario_id' => 'required'
    ], $messages);
    $request->user()->currentAccessToken()->delete();
  }

  public function store(NegocioRequest $request)
  {

    $user = Usuario::create([
      'nombre' => $request->nombre_propietario,
      'nick' => $request->nick,
      'password' => bcrypt($request->contrasena),
      'telefono' => $request->telefono
    ]);

    $image_url = substr(Storage::putFile('images', $request->photo), 7);
    // $image_url = $request->logo->store('images');

    Negocio::create([
      'usuario_id' => $user->id,
      'nombre' => $request->nombre_negocio,
      'descrip' => $request->descrip,
      'ubicacion' => $request->ubicacion,
      'horario_inicio' => $request->hora_apertura,
      'horario_cierre' => $request->hora_cierre,
      'imagen' => $image_url
    ]);

    $token = $user->createToken("descuentos")->plainTextToken;
    $response = [
      'usuario_id' => $user->id,
      'token' => $token
    ];

    return $response;
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
