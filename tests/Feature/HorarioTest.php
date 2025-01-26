<?php

namespace Tests\Feature;

use App\Models\HorarioAtencion;
use App\Models\Medico;
use App\Models\Usuario;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HorarioTest extends TestCase
{
    use DatabaseMigrations;

    //Verificar listado de horarios de atención
    public function test_verificarListaHorario(): void
    {
        $usuario = Usuario::factory()->state(['id'=>1,'tipo'=>1])->count(1)->create();
        Medico::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();
        HorarioAtencion::factory()->state(['idMedico'=>1])->count(10)->create();

        $response = $this->post(route('register.login'), [
            'correo' => $usuario[0]->correo,
            'password' => $usuario[0]->password,
        ]);

        $response=$this->actingAs($usuario[0])->get(route('horario.index'));
        $response->assertStatus(200);
    }
}
