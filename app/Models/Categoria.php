<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categoria';
    protected $primarykey = 'id_categoria';
    protected $fillable = ['nombre','descrip'];
    
    public function producto()
    {
        return $this->hasMany(Producto::class, 'id_Producto', 'id_Producto');
    }
    //relacion uno a muchos
    // public function productos(){
    //     return $this->hasMany('App\Models\Producto');
    // }
}
