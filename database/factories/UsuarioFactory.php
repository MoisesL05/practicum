<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'apellido' => fake()->lastName(),
            'cedula' => fake()->numberBetween(100000000,200000000),
            'correo' => fake()->email(),
            'estado' => fake()->numberBetween(1,1),
            'nombre' => fake()->name(),
            'password' => fake()->password(5,15),
            'tipo' => fake()->numberBetween(1,3),
            'verificado' => fake()->numberBetween(1,1),
        ];
    }
}
