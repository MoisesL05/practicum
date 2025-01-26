<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CitaMedicaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'estado' => fake()->numberBetween(1,3),
            'fecha' => fake()->date(),
            'hora' => fake()->time(),
            'idMedico' => fake()->numberBetween(1,10),
            'idPaciente' => fake()->numberBetween(1,10),
        ];
    }
}
