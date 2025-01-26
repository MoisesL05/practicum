<?php

namespace Tests\Unit;

use App\Models\Usuario;
use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    //Verificar creación de modelo en memoria
    public function test_verificaModelo(): void
    {
        $usuario = new Usuario(['apellido'=>'Santos','cedula'=>'1311311315','correo'=>'valeria@gmail.com','estado'=>1,'nombre'=>'Valeria','tipo'=>1,'verificado'=>0]);
        $this->assertEquals('Santos',$usuario->apellido);
        $this->assertEquals('1311311315',$usuario->cedula);
        $this->assertEquals('valeria@gmail.com',$usuario->correo);
        $this->assertEquals(1,$usuario->estado);
        $this->assertEquals('Valeria',$usuario->nombre);
        $this->assertEquals(1,$usuario->tipo);
        $this->assertEquals(0,$usuario->verificado);
    }
    //Verificar campos fillable
    public function test_verificaCamposFillable() {
        $usuario = new Usuario();
        $this->assertEquals([
            'apellido','cedula','correo','estado','id','nombre','password','tipo','verificado'
        ], $usuario->getFillable());
    }
}
