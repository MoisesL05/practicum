<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        //$usuarios = Usuario::all();
        $usuarios = Usuario::orderBy('id','desc')->paginate();
        return view('usuario.index', compact('usuarios'));
    }
    public function create() {
        return view('usuario.create');
    }
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuario')->with('success','Usuario creado correctamente');
        //return redirect()->url('usuario/show',$request);
    }
    public function show(Usuario $usuario) {
        return view('usuario.show',compact('usuario'));
    }
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', compact('usuario'));
    }
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'apellido' => 'requered|string|max:255',
            'cedula' => 'requered|string|max:20',
            'correo' => 'requered|string|max:255',
            'nombre' => 'requered|string|max:255',
            'password' => 'requered|string|max:255',
            'tipo' => 'int',
        ]);
        $usuario->update($request->all());
        return redirect()->route('usuario.index')->with('success','Usuario actualizado correctamente');
    }
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuario.index')->with('success','Usuario eliminado correctamente');

    }
}
