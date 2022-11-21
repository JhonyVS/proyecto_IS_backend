<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promocion;

class PromocionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Promocion::factory(1)->create(); 
        Promocion::create([
            'producto_id' => 1,
            'descuento' => 15,
            'fecha_ini' => '2022-11-20',
            'fecha_fin' => '2022-12-31',
            'hora_ini' => '16:00',
            'hora_fin' => '22:00'
        ]);

        Promocion::create([
            'producto_id' => 2,
            'descuento' => 25,
            'fecha_ini' => '2022-11-18',
            'fecha_fin' => '2022-12-31',
            'hora_ini' => '18:00',
            'hora_fin' => '23:00'
        ]);

        Promocion::create([
            'producto_id' => 3,
            'descuento' => 18,
            'fecha_ini' => '2022-10-28',
            'fecha_fin' => '2023-02-11',
            'hora_ini' => '14:00',
            'hora_fin' => '20:00'
        ]);
    }
}
