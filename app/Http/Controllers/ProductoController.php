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
      // return Producto::all();
      $productos = DB::table('producto')
        ->leftJoin('promocion', 'promocion.producto_id', '=', 'producto.id')
        ->select(
          'producto.id',
          'categoria',
          'nombre',
          'precio',
          'fecha_fin',
          'imagen'
        )
        ->paginate();
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
        'negocio_id' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024'
      ], $messages);

      if ($request->hasFile(('photo'))) {
        $image = $request->file('photo');
        $destinationPath = 'productos/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $request['photo'] = "$profileImage";
        // $input['image'] = "$profileImage";
      }

      $product = Producto::create([
        'negocio_id' => $request->negocio_id,
        'categoria' => $request->producto_categoria,
        'nombre' => $request->producto_nombre,
        'descrip' => $request->producto_descripcion,
        'precio' => $request->producto_precio,
        'activo' => 1,
        'imagen' => $request->photo
      ]);

      Promocion::create([
        'descuento' => $request->promocion_descuento,
        //'descuento_nombre' => $request->descuento_nombre,
        'fecha_ini' => $request->promocion_fecha_inicio,
        'fecha_fin' => $request->promocion_fecha_fin,
        'hora_ini' => $request->promocion_hora_inicio,
        'hora_fin' => $request->promocion_hora_fin,
        'ubicacion' => $request->promocion_ubicacion,
        'producto_id' => $product->id
      ]);
      
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
