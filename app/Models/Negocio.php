<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $table = 'negocio';
    protected $primarykey = 'id_Negocio';
    protected $fillable = ['id_Usuario','nombre','descrip','ubicacion','telefono','horarioInicio','horarioCierre'];
    protected $attributes = ['activo'=>'true'];
}
