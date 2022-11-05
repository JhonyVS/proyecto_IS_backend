<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primarykey = 'producto_id';
    public $timestamps = false;
    protected $fillable = [
        'negocio_id',
        'nombre',
        'descrip',
        'precio',
        'imagen',
        'categoria'
    ];

    public function promocion()
    {
        return $this->hasMany(Promocion::class, 'id', 'promocion_id');
    }

    public function negocio()
    {
        return $this->belongsTo(Negocio::class, 'id', 'negocio_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria', 'categoria');
    }

}
