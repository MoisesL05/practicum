<?php

namespace Tests\Unit;

use App\Models\Operador;
use PHPUnit\Framework\TestCase;

class OperadorTest extends TestCase
{
    //Verificar creación de modelo en memoria
    public function test_verificaModelo(): void
    {
        $operador = new Operador(['cargo'=>null,'departamento'=>null,'idUsuario'=>'1']);
        $this->assertEquals(null,$operador->cargo);
        $this->assertEquals(null,$operador->departamento);
        $this->assertEquals('1',$operador->idUsuario);
    }
    //Verificar campos fillable
    public function test_verificaCamposFillable() {
        $operador = new Operador();
        $this->assertEquals([
            'id','idUsuario'
        ], $operador->getFillable());
    }
}
