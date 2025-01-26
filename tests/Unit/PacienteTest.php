<?php

namespace Tests\Unit;

use App\Models\Paciente;
use PHPUnit\Framework\TestCase;

class PacienteTest extends TestCase
{
    //Verificar creación de modelo en memoria
    public function test_verificaModelo(): void
    {
        $paciente = new Paciente(['celular'=>null,'celularContactoEmergencia'=>null,'contactoEmergencia'=>null,'direccion'=>null,'idUsuario'=>'1']);
        $this->assertEquals(null,$paciente->celular);
        $this->assertEquals(null,$paciente->celularContactoEmergencia);
        $this->assertEquals(null,$paciente->contactoEmergencia);
        $this->assertEquals(null,$paciente->direccion);
        $this->assertEquals('1',$paciente->idUsuario);
    }
    //Verificar campos fillable
    public function test_verificaCamposFillable() {
        $paciente = new Paciente();
        $this->assertEquals([
            'id','idUsuario'
        ], $paciente->getFillable());
    }
}
