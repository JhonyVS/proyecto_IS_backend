<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promocion';
    protected $primarykey = 'id_Promocion';
    protected $fillable = ['id_Producto','descuento','fechaIni','fechaFin',
                        'horaIni','horaFin'];
}
