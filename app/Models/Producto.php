<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primarykey = 'id_producto';
    protected $fillable = ['id_negocio','nombre','descrip','precio','id_categoria'];

    public function promocion()
    {
        return $this->hasMany(Promocion::class, 'id_promocion', 'id_promocion');
    }

    public function negocio()
    {
        return $this->belongsTo(Negocio::class, 'id_negocio', 'id_negocio');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

}
