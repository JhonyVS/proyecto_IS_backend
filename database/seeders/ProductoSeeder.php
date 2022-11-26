<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    File::cleanDirectory(storage_path('app/images'));

    //id 1
    $img_url = Storage::putFile('images', app_path('own-files/hamburguesa.jpg'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Hamburguesa doble con queso",
      'descrip' => "Hamburguesa que contiene dos carnes, cebolla, tomate, aderesos, queso y papas",
      'precio' => "25",
      'imagen' => substr($img_url, 7),
      'categoria' => "Hamburguesa"
    ]);

    //id 2
    $img_url = Storage::putFile('images', app_path('own-files/pizza.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Pizza familiar",
      'descrip' => "Pizza con chorizo, jamón y queso",
      'precio' => "35",
      'imagen' => substr($img_url, 7),
      'categoria' => "Pizza"
    ]);

    //id 3
    $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "1/4 de pollo",
      'descrip' => "Racion de papas, arroz, yuca y 2 presas de pollo",
      'precio' => "21",
      'imagen' => substr($img_url, 7),
      'categoria' => "Pollo"
    ]);
    
    //id 4
    $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Pastel de mil hojas",
      'descrip' => "Porción de 300gr",
      'precio' => "8",
      'imagen' => substr($img_url, 7),
      'categoria' => "Postre"
    ]);

    //id 5
    $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Paceña Ice",
      'descrip' => "Lata de 345 ml",
      'precio' => "7",
      'imagen' => substr($img_url, 7),
      'categoria' => "Bebida"
    ]);

    //id 6
    $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Trucha a la parrilla",
      'descrip' => "Trucha a la parrilla con papas y arroz",
      'precio' => "38",
      'imagen' => substr($img_url, 7),
      'categoria' => "Parrilla"
    ]);

    //id 7
    $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Desayuno americano",
      'descrip' => "Contiene huevos, ya sean fritos o revueltos, bacon y tortitas americanas",
      'precio' => "12",
      'imagen' => substr($img_url, 7),
      'categoria' => "Desayuno"
    ]);

    //id 8
    $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
    Producto::create([
      'negocio_id' => 1,
      'nombre' => "Trucha frita",
      'descrip' => "Trucha con ensalada criolla y papas fritas",
      'precio' => "40",
      'imagen' => substr($img_url, 7),
      'categoria' => "Otros"
    ]);
  }
}
