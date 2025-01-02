<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        //variable que enlaza algo, no se que aun
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }
    public function create() {
        return view('usuario.create');
    }
    public function update() {
        return view('usuario.update');
    }
    public function delete($id) {
        return view('usuario.delete');
    }
    public function show($nombre, $email=null) {
        //return view('usuario.show',['nombre'=>$nombre,'email'=>$email]);
        return view('usuario.show',compact('nombre'),compact('email'));
    }
}
