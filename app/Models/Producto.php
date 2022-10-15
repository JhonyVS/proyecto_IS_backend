<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primarykey = 'id_Producto';
    protected $fillable = ['id_Negocio','nombre','descrip','precio','categoria'];
    protected $attributes = ['activo'=>'true'];
}
