<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
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
        'id_usuario' => 'required',
        'nombre' => 'required|min:3|max:64',
        //'producto_ubicacion' => 'required|min:5|max:50',
        'descrip' => 'required|min:5|max:255',
        'ubicacion' => 'required|min:10|max:255',
        'telefono' => 'required|min:5|max:20',
        'horario_inicio' => 'required',
        'horario_cierre' => 'required'
      ], $messages);

      Negocio::create([
        'usuario_id' => $request->id_usuario,
        'nombre' => $request->nombre,
        'descrip' => $request->descrip,
        'ubicacion' => $request->ubicacion,
        'telefono' => $request->telefono,
        'horario_inicio' => $request->horario_inicio,
        'horario_cierre' => $request->horario_cierre
      ]);

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
