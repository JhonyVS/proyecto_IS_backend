<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $primarykey = 'id_Usuario';
    protected $fillable = ['nombre','email','password','telefono','remember_token'];

    protected $hidden   = ['password','remember_token'];

}
