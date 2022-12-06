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
      
    //id 1
    Promocion::create([
      'producto_id' => 1,
      'descuento' => 15,
      'fecha_ini' => '2022-11-20',
      'fecha_fin' => '2022-12-31',
      'hora_ini' => '16:00',
      'hora_fin' => '22:00'
    ]);

    //id 2
    Promocion::create([
      'producto_id' => 2,
      'descuento' => 25,
      'fecha_ini' => '2022-11-18',
      'fecha_fin' => '2022-12-31',
      'hora_ini' => '18:00',
      'hora_fin' => '23:00'
    ]);

    //id 3
    Promocion::create([
      'producto_id' => 3,
      'descuento' => 18,
      'fecha_ini' => '2022-10-28',
      'fecha_fin' => '2023-02-11',
      'hora_ini' => '14:00',
      'hora_fin' => '20:00'
    ]);

    //id 4
    Promocion::create([
      'producto_id' => 4,
      'descuento' => 12,
      'fecha_ini' => '2022-10-28',
      'fecha_fin' => '2023-01-11',
      'hora_ini' => '09:00',
      'hora_fin' => '18:00'
    ]);

    //id 5
    Promocion::create([
      'producto_id' => 5,
      'descuento' => 6,
      'fecha_ini' => '2022-10-28',
      'fecha_fin' => '2023-01-01',
      'hora_ini' => '15:00',
      'hora_fin' => '20:30'
    ]);

    //id 6
    Promocion::create([
      'producto_id' => 6,
      'descuento' => 30,
      'fecha_ini' => '2022-10-28',
      'fecha_fin' => '2023-03-30',
      'hora_ini' => '18:00',
      'hora_fin' => '23:00'
    ]);

    // //id 7
    // Promocion::create([
    //   'producto_id' => 7,
    //   'descuento' => 10,
    //   'fecha_ini' => '2022-10-28',
    //   'fecha_fin' => '2023-03-01',
    //   'hora_ini' => '12:00',
    //   'hora_fin' => '22:00'
    // ]);

    // //id 8
    // Promocion::create([
    //   'producto_id' => 8,
    //   'descuento' => 30,
    //   'fecha_ini' => '2022-10-28',
    //   'fecha_fin' => '2022-12-31',
    //   'hora_ini' => '12:00',
    //   'hora_fin' => '20:00'
    // ]);
  }
}
