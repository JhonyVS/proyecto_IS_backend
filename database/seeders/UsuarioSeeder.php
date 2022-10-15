<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** 
        *$us = new Usuario();
        *$us->nombre ="Jhony";
        *$us->email ="miemail@correo.com";
        *$us->password="1234";
        *$us->telefono=78340215;
        *
        *$us->save();
        */
        Usuario::factory(100)->create();
    }
}
