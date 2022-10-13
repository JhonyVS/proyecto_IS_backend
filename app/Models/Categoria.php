<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'Categoria';
    protected $primaryKey = 'id_Categoria';
    protected $keyType = 'string';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
    //public $incrementing = true;
    public $timestamps = false;

    public function producto(){
        return $this->hasMany(Producto::class, 'id_Categoria', 'id_Categoria');
    }
}
