<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Promocion;
use App\Models\Negocio;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $hoy = Carbon::today();
      $productos = DB::table('producto')
        ->leftJoin('promocion', 'promocion.id_Producto', '=', 'producto.id_Producto')
        // ->where('fechaFin', '>', $hoy)
        // ->whereIn('fechaFin', '>', $hoy)
        ->select(
          'producto.id_Producto',
          'categoria',
          'nombre',
          'precio',
          'fechaFin'
        )
        ->get();
      return $productos;
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
        //'producto_ubicacion' => 'required|min:5|max:50',
        'producto_descripcion' => 'required|min:5|max:255',
        'producto_categoria' => 'required',
        'promocion_descuento' => 'required',
        'promocion_fecha_inicio' => 'required',
        'promocion_fecha_fin' => 'required',
        'promocion_hora_inicio' => 'required',
        'promocion_hora_fin' => 'required',
        'negocio_id' => 'required'
      ], $messages);

      // //usuario estático
      // $pass = "mypass1234";
      // $usuario = Usuario::create([
      //   'nombre' => "usuario de ejemplo 1",
      //   'email' => "example@mail.com",
      //   'password' => $pass,
      //   // 'password' => bcrypt($pass),
      //   'telefono' => 69435673
      // ]);

      // //negocio estatico

      // $negocio = Negocio::create([
      //   'id_Usuario' => $usuario->id_Usuario,
      //   'nombre' => "negocio de ejemplo",
      //   'ubicacion' => "ubicacion de ejemplo",
      //   'telefono' => 77665544,
      //   'activo' => 1
      // ]);

      $producto = Producto::create([
        'id_Negocio' => $request->negocio_id,
        'categoria' => $request->producto_categoria,
        'nombre' => $request->producto_nombre,
        'descrip' => $request->producto_descripcion,
        'precio' => $request->producto_precio
        //'url_imagen' => $request->producto_url_imagen
      ]);

      Promocion::create([
        'id_Producto' => $producto->id_Producto,
        'descuento' => $request->promocion_descuento,
        //'descuento_nombre' => $request->descuento_nombre,
        'fechaIni' => $request->promocion_fecha_inicio,
        'fechaFin' => $request->promocion_fecha_fin,
        'horaIni' => $request->promocion_hora_inicio,
        'horaFin' => $request->promocion_hora_fin,
        'ubicacion' => $request->promocion_ubicacion
      ]);

      
      
      // $token = $usuario->createToken("compromiso")->plainTextToken;
      
      // $response = [
      //   'usuario_id' => $usuario->usuario_id,
      //   'token' => $token
      // ];
      // return response($response);
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
