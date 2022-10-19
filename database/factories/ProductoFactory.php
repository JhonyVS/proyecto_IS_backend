<?php

namespace Database\Factories;

use App\Models\Categoria;
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
            'negocio_id'    => $this->faker->numberBetween(1,100),
            'categoria'     => $this->faker->randomElement(Categoria::pluck('categoria')),
            'nombre'        => $this->faker->title(),
            'descrip'       => $this->faker->sentence(),
            'precio'        => $this->faker->randomFloat(2,1,20),
        ];
    }
}
