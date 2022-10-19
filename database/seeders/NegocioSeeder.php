<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Negocio;

class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$var = new Negocio();
        //$var->id_Usuario=1;
        //$var->nombre="Pizzeria Turin";
        //$var->descrip="descripcion.....";
        //$var->ubicacion="ubicacion....";
        //$var->telefono=4453902;
        //$var->horarioInicio='18:00:00';
        //$var->horarioCierre='23:00:00';
        //$var->save();
        Negocio::factory(100)->create();

    }
}
