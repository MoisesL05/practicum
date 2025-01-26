<?php

namespace Tests\Feature;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Usuario;
use App\Models\CitaMedica;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CitaMedicaTest extends TestCase
{
    use DatabaseMigrations;

    //Verificar listado de citas medicas
    public function test_verificarListaCitasMedicas(): void
    {
        $usuario = Usuario::factory()->state(['id'=>1,'tipo'=>1])->count(1)->create();
        Medico::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();
        $usuarioP = Usuario::factory()->state(['id'=>2,'tipo'=>3])->count(1)->create();
        Paciente::factory()->state(['id'=>1,'idUsuario'=>2])->count(1)->create();
        CitaMedica::factory()->state(['idMedico'=>1,'idPaciente'=>1])->count(10)->create();

        $response = $this->post(route('register.login'), [
            'correo' => $usuario[0]->correo,
            'password' => $usuario[0]->password,
        ]);

        $response=$this->actingAs($usuario[0])->get(route('citamedica.index'));
        $response->assertStatus(200);
    }

    //Verificar mostrar una cita medica
    public function test_verificarShowCitaMedica(): void
    {
        $usuario = Usuario::factory()->state(['id'=>1,'tipo'=>1])->count(1)->create();
        Medico::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();
        $usuarioP = Usuario::factory()->state(['id'=>2,'tipo'=>3])->count(1)->create();
        Paciente::factory()->state(['id'=>1,'idUsuario'=>2])->count(1)->create();
        CitaMedica::factory()->state(['id'=>1,'idMedico'=>1,'idPaciente'=>1])->count(1)->create();

        $response = $this->post(route('register.login'), [
            'correo' => $usuarioP[0]->correo,
            'password' => $usuarioP[0]->password,
        ]);

        $response=$this->actingAs($usuarioP[0])->get(route('citamedica.show',1));
        $response->assertStatus(200);
    }
}
