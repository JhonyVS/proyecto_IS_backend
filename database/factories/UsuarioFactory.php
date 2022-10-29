<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'    => $this->faker->name(),
            'nick'     => $this->faker->userName(),
            'password'  => $this->faker->sha1(),
            'telefono'   => $this->faker->numberBetween(4123456,4987653)
        ];
    }
}
