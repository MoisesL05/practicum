<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioAtencionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'diaDeSemana' => fake()->numberBetween(1,7),
            'horaFin' => fake()->time(),
            'horaInicio' => fake()->time(),
            'idMedico' => fake()->numberBetween(1,10),
        ];
    }
}
