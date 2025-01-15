<?php

namespace Tests\Unit;

use App\Models\Usuario;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    public function test_crearUsuarioEnMemoria() {
        $usuario = new Usuario(['nombre'=>'Erick','apellido'=>'Cartman','correo'=>'erick@gmail.com']);
        $this->assertEquals('Erick',$usuario->nombre);
        $this->assertEquals('Cartman',$usuario->apellido);
        $this->assertEquals('erick@gmail.com',$usuario->correo);
    }
    public function test_fillableUsuario() {
        $usuario = new Usuario();
        $this->assertEquals([
            'apellido','cedula','correo','estado','id','nombre','password','tipo','verificado'
        ], $usuario->getFillable());
    }
}
