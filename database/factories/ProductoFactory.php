<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_Negocio'    => $this->faker->numberBetween(1,100),
            'categoria'     => $this->faker->numberBetween(1,7),
            'nombre'        => $this->faker->title(),
            'descrip'       => $this->faker->sentence(),
            'precio'        => $this->faker->randomFloat(2,1,20),
            'imagen_producto'=> $this->faker->url()
        ];
    }
}
