<?php

namespace Tests\Unit;

use App\Models\CitaMedica;
use PHPUnit\Framework\TestCase;

class CitaTest extends TestCase
{
    //Verificar creación de modelo en memoria
    public function test_verificaModelo(): void
    {
        $citamedica = new CitaMedica(['estado'=>1,'fecha'=>'2025-01-27','hora'=>'08:00:00','idMedico'=>'1','idPaciente'=>'1']);
        $this->assertEquals(1,$citamedica->estado);
        $this->assertEquals('2025-01-27',$citamedica->fecha);
        $this->assertEquals('08:00:00',$citamedica->hora);
        $this->assertEquals('1',$citamedica->idMedico);
        $this->assertEquals('1',$citamedica->idPaciente);
    }
    //Verificar campos fillable
    public function test_verificaCamposFillable() {
        $citamedica = new CitaMedica();
        $this->assertEquals([
            'estado','fecha','hora','id','idMedico','idPaciente'
        ], $citamedica->getFillable());
    }
}
