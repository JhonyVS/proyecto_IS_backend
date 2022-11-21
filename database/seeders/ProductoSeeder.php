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
        $img_url = Storage::putFile('images', app_path('own-files/hamburguesa.jpg'));
        Producto::create([
            'negocio_id' => 1,
            'nombre' => "Hamburguesa doble con queso",
            'descrip' => "Hamburguesa que contiene dos carnes, cebolla, tomate, aderesos, queso y papas",
            'precio' => "25",
            'imagen' => substr($img_url, 7),
            'categoria' => "Hamburguesa"
        ]);

        $img_url = Storage::putFile('images', app_path('own-files/pizza.png'));
        Producto::create([
            'negocio_id' => 1,
            'nombre' => "Pizza familiar",
            'descrip' => "Pizza con chorizo, jamón y queso",
            'precio' => "35",
            'imagen' => substr($img_url, 7),
            'categoria' => "Pizza"
        ]);

        $img_url = Storage::putFile('images', app_path('own-files/pollo.png'));
        Producto::create([
            'negocio_id' => 1,
            'nombre' => "1/4 de pollo",
            'descrip' => "Racion de papas, arroz, yuca y 2 presas de pollo",
            'precio' => "21",
            'imagen' => substr($img_url, 7),
            'categoria' => "Pollo"
        ]);
        // Producto::factory(100)->create();
    }
}
