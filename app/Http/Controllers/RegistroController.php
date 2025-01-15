<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index() {
        return view('register.index');
    }
    public function create() {
        return view('register.create');
    }
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuario.index')->with('success','Usuario creado correctamente, revise su correo y siga las indicaciones');
    }
    public function login() {
        $usuarios = Usuario::orderBy('id','desc')->paginate();
        return view('usuario.index', compact('usuarios'));
    }
    public function recovery() {
        return view('register.recovery');
    }
}
