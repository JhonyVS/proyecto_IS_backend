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
        $usuario = new Usuario();
        $usuario->nick = "prueba";
        $usuario->nombre = "usuario_prueba";
        $usuario->telefono = "123802398";
        $usuario->password = bcrypt("pass1234");
        $usuario->save();
        // Usuario::factory(100)->create();
    }
}
