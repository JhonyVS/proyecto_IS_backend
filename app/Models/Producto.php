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

    public function promocion()
    {
        return $this->hasMany(Promocion::class, 'id_Promocion', 'id_Promocion');
    }

    public function negocio()
    {
        return $this->belongsTo(Negocio::class, 'id_Negocio', 'id_Negocio');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_Categoria', 'categoria');
    }

}
