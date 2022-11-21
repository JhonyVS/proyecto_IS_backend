<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';
    protected $primarykey = 'promocion_id';
    public $timestamps = false;
    protected $fillable = [
        'producto_id',
        'descuento',
        'fecha_ini',
        'fecha_fin',
        'hora_ini',
        'hora_fin'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id', 'producto_id');
    }

    // relacion muchos a uno
    // public function producto(){
    //     return $this->belongsTo('App\Models\Producto');
    // }
}
