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
        // Negocio::factory(100)->create();

        Negocio::create([
            'usuario_id' => 1,
            'nombre' => "Burger king",
            'descrip' => "Negocio de hamburguesas",
            'ubicacion' => "Calle Esteban Arce y Tarata #123",
            'telefono' => "54365676",
            'imagen' => "ejemplo.jpg",
            'horario_inicio' => "12:00",
            'horario_cierre' => "18:00"
        ]);

    }
}
