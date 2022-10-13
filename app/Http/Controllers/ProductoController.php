<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Descuento;

class ProductoController extends Controller
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
            'unique' => 'El nombre :input ya fue tomado',
            // 'equipos.*.preinscripcion_numero_de_deposito.unique' => 'El numero de transaccion :input ya uso en otro equipo',
            // 'equipos.*.categoria.required' => 'Debe seleccionar una categoria',
            // 'equipo_nacionalidad.required' => 'Debe seleccionar una nacionalidad'
          ];
      
          $request->validate([
            'producto_nombre' => 'required|min:3|max:50',
            'producto_precio' => 'required|min:1|max:8',
            'descuento_cantidad' => 'required',
            'producto_ubicacion' => 'required|min:5|max:50',
            'producto_descripcion' => 'required|min:5|max:255',
            'producto_categoria' => 'required',
            'descuento_fecha_inicio' => 'required',
            'descuento_fecha_fin' => 'required',
            'descuento_hora_inicio' => 'required',
            'descuento_hora_fin' => 'required'
          ], $messages);

          $id_negocio = 1;
          $producto = Producto::create([
            'id_negocio' => $id_negocio,
            'categoria' => $request->producto_categoria,
            'nombre' => $request->producto_nombre,
            'descripcion' => $request->producto_descripcion,
            'precio' => $request->producto_precio,
            'activo' => 1,
            'url_imagen' => $request->producto_url_imagen
          ]);

          $descuento = Descuento::create([
            'id_producto' => $producto->id_producto,
            'descuento_nombre' => $request->descuento_nombre,
            'fecha_inicio' => $request->descuento_fecha_inicio,
            'fecha_fin' => $request->descuento_fecha_fin,
            'activo' => 1,
            'hora_inicio' => $request->descuento_hora_inicio,
            'hora_fin' => $request->descuento_hora_fin
          ]);
      
        //   $rq_category = $request->category;
        //   $rq_team_name = $request->team_name;
        //   $flag = DB::table('team')
        //   ->where('team_name',$rq_team_name)
        //   ->where('category', $rq_category)
        //   ->exists();
      
        //   if ($flag) {
        //     return response([
        //       'error' => 'Un equipo con el mismo nombre y categoria ya existe'
        //     ]);
        //   }
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
