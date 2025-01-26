<?php

namespace Tests\Feature;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Usuario;
use App\Models\CitaMedica;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistroTest extends TestCase
{
    use DatabaseMigrations;

    //Verificar vista registro de nuevo usuario paciente
    public function test_verificarVisualizacionRegistro(): void
    {
        $response=$this->get(route('register.create'));
        $response->assertStatus(200)->assertSee('Registro de Paciente');
    }

    //Verificar login
    public function test_verificarLogin(): void
    {
        $usuario = Usuario::factory()->state(['id'=>1,'tipo'=>1])->count(1)->create();
        Medico::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();
        Paciente::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();
        CitaMedica::factory()->state(['idMedico'=>1,'idPaciente'=>1])->count(10)->create();

        $response = $this->post(route('register.login'), [
            'correo' => $usuario[0]->correo,
            'password' => $usuario[0]->password,
        ]);

        $response=$this->actingAs($usuario[0])->get(route('dashboard.index'));
        $response->assertStatus(200)->assertSee('Ver todas las citas');
    }
}
