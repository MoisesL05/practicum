<?php

namespace Tests\Feature;

use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Operador;
use App\Models\Usuario;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UsuarioTest extends TestCase
{
    use DatabaseMigrations;

    //Verificar listado de usuarios
    public function test_verificarListaUsuarios(): void
    {
        $usuario = Usuario::factory()->state(['id'=>1,'tipo'=>1])->count(1)->create();
        $usuarioP = Usuario::factory()->state(['id'=>2,'tipo'=>3])->count(1)->create();
        $usuarioO = Usuario::factory()->state(['id'=>3,'tipo'=>2])->count(1)->create();
        Medico::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();
        Paciente::factory()->state(['id'=>1,'idUsuario'=>2])->count(1)->create();
        Operador::factory()->state(['id'=>1,'idUsuario'=>3])->count(1)->create();

        $response = $this->post(route('register.login'), [
            'correo' => $usuarioO[0]->correo,
            'password' => $usuarioO[0]->password,
        ]);

        $response=$this->actingAs($usuarioO[0])->get(route('usuario.index'));
        $response->assertStatus(200);
    }

    //Verificar mostrar un usuario
    public function test_verificarShowUsuario(): void
    {
        $usuario = Usuario::factory()->state(['id'=>1,'tipo'=>1])->count(1)->create();
        Medico::factory()->state(['id'=>1,'idUsuario'=>1])->count(1)->create();

        $response = $this->post(route('register.login'), [
            'correo' => $usuario[0]->correo,
            'password' => $usuario[0]->password,
        ]);

        $response=$this->actingAs($usuario[0])->get(route('usuario.show',1));
        $response->assertStatus(200);
    }
}
