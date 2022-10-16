<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primarykey = 'categoria_id';
    protected $fillable = [
        'nombre',
        'descrip'
    ];
    public $timestamps = false;
    
    public function producto()
    {
        return $this->hasMany(Producto::class, 'producto_id', 'producto_id');
    }
    //relacion uno a muchos
    // public function productos(){
    //     return $this->hasMany('App\Models\Producto');
    // }
}
