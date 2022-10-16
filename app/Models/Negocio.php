<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table = 'negocio';
    protected $primarykey = 'id_Negocio';
    protected $fillable = ['id_usuario','nombre','descrip','ubicacion',
                            'telefono','horario_inicio','horario_cierre'];

    public function producto()
    {
        return $this->hasMany(Producto::class, 'id_Producto', 'id_Producto');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_Usuario', 'id_Usuario');
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
