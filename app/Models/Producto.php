<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primarykey = 'id_Producto';
    protected $fillable = ['id_Negocio','nombre','descrip','precio','categoria','imagen_producto'];


    // relacion muchos a uno
    public function categorias(){
        return $this->belongsTo('App\Models\Categoria');
    }

    // relacion muchos a uno
    public function negocios(){
        return $this->belongsTo('App\Models\Negocio');
    }

    //relacion uno a muchos
    public function promociones(){
        return $this->hasMany('App\Models\Promocion');
    }
}
