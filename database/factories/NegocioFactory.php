<?php

namespace Database\Factories;

use App\Models\Usuario;
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
            'usuario_id'    => $this->faker->randomElement(Usuario::pluck('id')),
            'nombre'        => $this->faker->name(),
            'descrip'       => $this->faker->sentence(),
            'ubicacion'     => $this->faker->name(),
            'telefono'      => $this->faker->numberBetween(4123456,4987653),
            'horario_inicio'    => $this->faker->time(),
            'horario_cierre'    => $this->faker->time()
        ];
    }
}
