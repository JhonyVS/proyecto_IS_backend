<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table = 'negocio';
    protected $primarykey = 'negocio_id';
    public $timestamps = false;
    protected $fillable = [
        'usuario_id',
        'nombre',
        'descrip',
        'ubicacion',
        'telefono',
        'imagen_url',
        'horario_inicio',
        'horario_cierre'
    ];

    public function producto()
    {
        return $this->hasMany(Producto::class, 'id', 'producto_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'usuario_id');
    }
    //relacion uno a muchos
    // public function productos(){
    //     return $this->hasMany('App\Models\Producto');
    // }

    // // relacion muchos a uno
    // public function usuarios(){
    //     return $this->belongsTo('App\Models\Usuario');
    // }
}
