<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = new Categoria();
        $c1->categoria ="Postre";
        $c1->save();

        $c2 = new Categoria();
        $c2->categoria ="Bebida";
        $c2->save();

        $c3 = new Categoria();
        $c3->categoria ="Hamburguesa";
        $c3->save();

        $c4 = new Categoria();
        $c4->categoria ="Pollo";
        $c4->save();

        $c5 = new Categoria();
        $c5->categoria ="Pizza";
        $c5->save();

        $c6 = new Categoria();
        $c6->categoria ="Parrilla";
        $c6->save();

        $c7 = new Categoria();
        $c7->categoria ="Desayuno";
        $c7->save();

        $c8 = new Categoria();
        $c8->categoria = "Otros";
        $c8->save();
    }
}
