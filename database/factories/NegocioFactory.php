<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Negocio>
 */
class NegocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_usuario'    => $this->faker->unique()->numberBetween(1,100),
            'nombre'        => $this->faker->name(),
            'descrip'       => $this->faker->sentence(),
            'ubicacion'     => $this->faker->name(),
            'telefono'      => $this->faker->numberBetween(4123456,4987653),
            'horario_inicio'    => $this->faker->time(),
            'horario_cierre'    => $this->faker->time()
        ];
    }
}
