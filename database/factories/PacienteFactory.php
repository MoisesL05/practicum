<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'celular' => fake()->phoneNumber(),
            'celularContactoEmergencia' => fake()->phoneNumber(),
            'contactoEmergencia' => fake()->name(),
            'direccion' => fake()->address(),
            'idUsuario' => fake()->numberBetween(1,100),
        ];
    }
}
