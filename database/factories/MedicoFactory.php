<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'celular' => fake()->phoneNumber(),
            'direccionConsultorio' => fake()->address(),
            'especialidad' => 'Medicina General',
            'idUsuario' => fake()->numberBetween(1,100),
            'telefonoConsultorio' => fake()->phoneNumber(),
        ];
    }
}
