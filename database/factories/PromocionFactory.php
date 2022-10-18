<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promocion>
 */
class PromocionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'producto_id'   => $this->faker->randomElement(Producto::pluck('id')),
            'descuento'     => $this->faker->randomFloat(2,1,5),
            'ubicacion'     => $this->faker->name(),
            'fecha_ini'      => $this->faker->date(),
            'fecha_fin'      => $this->faker->date(),
            'hora_ini' => $this->faker->time(),
            'hora_fin' => $this->faker->time(),
        ];
    }
}
