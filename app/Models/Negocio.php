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
                            'telefono','horarioInicio','horarioCierre'];

    public function producto()
    {
        return $this->hasMany(Producto::class, 'id_Producto', 'id_Producto');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_Usuario', 'id_Usuario');
    }
}
