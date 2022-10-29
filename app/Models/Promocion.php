<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';
    protected $primarykey = 'id_Promocion';
    protected $fillable = ['id_Producto','descuento','ubicacion','fechaIni','fechaFin',
                        'horaIni','horaFin','imagen_promocion'];

    // relacion muchos a uno
    public function productos(){
        return $this->belongsTo('App\Models\Producto');
    }
}
