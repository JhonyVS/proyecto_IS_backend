<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table = 'negocio';
    protected $primarykey = 'id_Negocio';
    protected $fillable = ['id_Usuario','nombre','descrip','ubicacion',
                            'telefono','horarioInicio','horarioCierre','imagen_negocio'];



    //relacion uno a muchos
    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    // relacion muchos a uno
    public function usuarios(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
