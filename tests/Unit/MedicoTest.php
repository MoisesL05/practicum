<?php

namespace Tests\Unit;

use App\Models\Medico;
use PHPUnit\Framework\TestCase;

class MedicoTest extends TestCase
{
    //Verificar creación de modelo en memoria
    public function test_verificaModelo(): void
    {
        $medico = new Medico(['celular'=>null,'direccionConsultorio'=>null,'especialidad'=>null,'idUsuario'=>'1','telefonoConsultorio'=>null]);
        $this->assertEquals(null,$medico->celular);
        $this->assertEquals(null,$medico->direccionConsultorio);
        $this->assertEquals(null,$medico->especialidad);
        $this->assertEquals('1',$medico->idUsuario);
        $this->assertEquals(null,$medico->telefonoConsultorio);
    }
    //Verificar campos fillable
    public function test_verificaCamposFillable() {
        $medico = new Medico();
        $this->assertEquals([
            'id','idUsuario'
        ], $medico->getFillable());
    }
}
