<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';
    protected $primarykey = 'id_promocion';
    protected $fillable = ['id_producto','descuento','fecha_ini','fecha_fin',
                        'hora_ini','hora_fin', 'ubicacion'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_Producto', 'id_Producto');
    }

    // relacion muchos a uno
    // public function producto(){
    //     return $this->belongsTo('App\Models\Producto');
    // }
}
