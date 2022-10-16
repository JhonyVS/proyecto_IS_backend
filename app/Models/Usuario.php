<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $primarykey = 'usuario_id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'telefono'
    ];
    protected $hidden   = [
        'password',
        'remember_token'
    ];
    // protected $casts = [
    //     'email_verified_at' => 'datetime'
    // ];

    public function negocio()
    {
        return $this->hasMany(Negocio::class, 'negocio_id', 'negocio_id');
    }

    //relacion uno a muchos
    // public function negocios(){
    //     return $this->hasMany('App\Models\Negocio');
    // }

}
