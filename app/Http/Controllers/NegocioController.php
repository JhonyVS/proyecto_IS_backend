<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use App\Models\Usuario;
use Illuminate\Http\Request;

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

      // $negocio = new Negocio($request->input());
      // $negocio->save();
        //
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
