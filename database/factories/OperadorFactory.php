<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OperadorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cargo' => fake()->name(),
            'departamento' => fake()->lastName(),
            'idUsuario' => fake()->numberBetween(1,100),
        ];
    }
}
