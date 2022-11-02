<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Negocio;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
      return response(['login' => 'El nick o la contraseña son incorrectos']);
    }

    $token = $user->createToken("descuentos")->plainTextToken;

    $response = [
      'usuario_id' => $user->id,
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

  public function store(Request $request)
  {
    $messages = [
      'required' => 'El campo :attribute es obligatorio',
      'unique' => 'El nombre :input ya fue tomado'
    ];

    $request->validate([
      'nombre_negocio' => 'required|min:3|max:64',
      'nombre_propietario' => 'required|min:4|max:64',
      'logo' => 'required',
      'ubicacion' => 'required|min:10|max:255',
      'descrip' => 'required|min:5|max:255',
      'telefono' => 'required|min:5|max:20',
      'hora_apertura' => 'required',
      'hora_cierre' => 'required',
      'nick' => 'required|min:4|max:32|unique:usuario',
      'contrasena' => 'required|min:4|max:32'
    ], $messages);

    $user = Usuario::create([
      'nombre' => $request->nombre_propietario,
      'nick' => $request->nick,
      'password' => bcrypt($request->contrasena),
      'telefono' => $request->telefono
    ]);

    $negocio = Negocio::create([
      'usuario_id' => $user->id,
      'nombre' => $request->nombre_negocio,
      'descrip' => $request->descrip,
      'ubicacion' => $request->ubicacion,
      'horario_inicio' => $request->hora_apertura,
      'horario_cierre' => $request->hora_cierre
    ]);
    
    $extension = $request->file('logo')->getClientOriginalExtension();
    $nombre = "logo_negocio_id_".$negocio->id.".".$extension;
    $path = $request->logo->storeAs('images', $nombre);
    $negocio->imagen_url = $path;
    $negocio->save();

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
