<?php

namespace Tests\Unit;

use App\Models\HorarioAtencion;
use PHPUnit\Framework\TestCase;

class HorarioTest extends TestCase
{
    //Verificar creación de modelo en memoria
    public function test_verificaModelo(): void
    {
        $horario = new HorarioAtencion(['diaDeSemana'=>'1','horaInicio'=>'08:00:00','horaFin'=>'11:00:00','idMedico'=>'1']);
        $this->assertEquals('1',$horario->diaDeSemana);
        $this->assertEquals('08:00:00',$horario->horaInicio);
        $this->assertEquals('11:00:00',$horario->horaFin);
        $this->assertEquals('1',$horario->idMedico);
    }
    //Verificar campos fillable
    public function test_verificaCamposFillable() {
        $horario = new HorarioAtencion();
        $this->assertEquals([
            'diaDeSemana','horaFin','horaInicio','idMedico'
        ], $horario->getFillable());
    }
}
