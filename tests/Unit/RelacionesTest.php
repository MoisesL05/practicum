<?php

namespace Tests\Unit;

use App\Models\CitaMedica;
use App\Models\Medico;
use App\Models\Operador;
use App\Models\Paciente;
use App\Models\Usuario;
use Tests\TestCase;

class RelacionesTest extends TestCase
{
    //Relación Paciente-Usuario
    public function test_validarRelacionPacienteUsuario(): void
    {
        $paciente = new Paciente();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class,$paciente->usuario());
    }
    //Relación Operador-Usuario
    public function test_validarRelacionOperadorUsuario(): void
    {
        $operador = new Operador();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class,$operador->usuario());
    }
    //Relación Médico-Usuario
    public function test_validarRelacionMedicoUsuario(): void
    {
        $medico = new Medico();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class,$medico->usuario());
    }
    //Relación Médico-Horario
    public function test_validarRelacionMedicoHorario(): void
    {
        $medico = new Medico();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasMany::class,$medico->horario());
    }
    //Relación Cita-Médico
    public function test_validarRelacionCitaMedico(): void
    {
        $cita = new CitaMedica();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasOne::class,$cita->medico());
    }
    //Relación Cita-Paciente
    public function test_validarRelacionCitaPaciente(): void
    {
        $cita = new CitaMedica();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasOne::class,$cita->paciente());
    }
    //Relación Usuario-Paciente
    public function test_validarRelacionUsuarioPaciente(): void
    {
        $usuario = new Usuario();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasOne::class,$usuario->paciente());
    }
    //Relación Usuario-Operador
    public function test_validarRelacionUsuarioOperador(): void
    {
        $usuario = new Usuario();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasOne::class,$usuario->operador());
    }
    //Relación Usuario-Medico
    public function test_validarRelacionUsuarioMedico(): void
    {
        $usuario = new Usuario();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasOne::class,$usuario->medico());
    }
}
