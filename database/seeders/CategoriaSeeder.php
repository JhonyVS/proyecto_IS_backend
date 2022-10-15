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
        $c1->nombre ="Postre";
        $c1->descrip ="categoria postres...";
        $c1->save();

        $c2 = new Categoria();
        $c2->nombre ="Bebida";
        $c2->descrip ="categoria bebidas...";
        $c2->save();

        $c3 = new Categoria();
        $c3->nombre ="Hamburguesa";
        $c3->descrip ="categoria hamburguesas....";
        $c3->save();

        $c4 = new Categoria();
        $c4->nombre ="Pollo";
        $c4->descrip ="categoria pollos...";
        $c4->save();

        $c5 = new Categoria();
        $c5->nombre ="Pizza";
        $c5->descrip ="categoria pizzas...";
        $c5->save();

        $c6 = new Categoria();
        $c6->nombre ="Parrilla";
        $c6->descrip ="categoria parrillas...";
        $c6->save();

        $c7 = new Categoria();
        $c7->nombre ="Desayuno";
        $c7->descrip ="categoria desayunos...";
        $c7->save();
    }
}
