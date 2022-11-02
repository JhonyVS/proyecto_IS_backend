<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'usuario';
    protected $primarykey = 'usuario_id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'nick',
        'password',
        'telefono'
    ];
    // protected $hidden   = [
    //     'password',
    //     'remember_token'
    // ];

    public function negocio()
    {
        return $this->hasMany(Negocio::class, 'id', 'negocio_id');
    }

    //relacion uno a muchos
    // public function negocios(){
    //     return $this->hasMany('App\Models\Negocio');
    // }

}
