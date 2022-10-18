<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primarykey = 'categoria';
    protected $fillable = [
        'categoria'
    ];
    public $timestamps = false;
    
    public function producto()
    {
        return $this->hasMany(Producto::class, 'id', 'producto_id');
    }
    //relacion uno a muchos
    // public function productos(){
    //     return $this->hasMany('App\Models\Producto');
    // }
}
