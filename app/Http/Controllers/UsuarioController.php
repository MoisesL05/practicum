<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Operador;
use App\Models\Paciente;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::orderBy('id','desc')->paginate();
        return view('usuario.index', compact('usuarios'));
    }
    public function create()
    {
        return view('usuario.create');
    }
    public function store(Request $request)
    {
        Usuario::create($request->all());
        $idUsuarioCreado = Usuario::latest('id')->first()->id;
        if ($request->tipo==1) { //medico
            $medico = new Medico();
            $medico->idUSuario = $idUsuarioCreado;
            $medico->celular = $request->medCelular;
            $medico->direccionConsultorio = $request->medDireccion;
            $medico->especialidad = $request->medEspecialidad;
            $medico->telefonoConsultorio = $request->medTelefono;
            $medico->save();
        } else if ($request->tipo==2) { //operador
            $operador = new Operador();
            $operador->idUSuario = $idUsuarioCreado;
            $operador->cargo = $request->opeCargo;
            $operador->departamento = $request->opeDepartamento;
            $operador->save();
        } else { //paciente
            $paciente = new Paciente();
            $paciente->idUSuario = $idUsuarioCreado;
            $paciente->celular = $request->pacCelular;
            $paciente->celularContactoEmergencia = $request->pacCelContacto;
            $paciente->contactoEmergencia = $request->pacContacto;
            $paciente->direccion = $request->pacDireccion;
            $paciente->save();
        }
        return redirect()->route('usuario.index')->with('success','Usuario creado correctamente');
    }
    public function show(Usuario $usuario)
    {
        return view('usuario.show',compact('usuario'));
    }
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }
    public function update(Request $request, Usuario $usuario)
    {
        //return $request;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->email;
        if ($request->password!="") {
            $usuario->password = $request->password;
        }
        $usuario->cedula = $request->cedula;
        $usuario->tipo = $request->tipoH;
        $usuario->save();

        if ($request->tipo==1) { //medico
            $usuario->medico->celular = $request->medCelular;
            $usuario->medico->direccionConsultorio = $request->medDireccion;
            $usuario->medico->especialidad = $request->medEspecialidad;
            $usuario->medico->telefonoConsultorio = $request->medTelefono;
            $usuario->medico->save();
        } else if ($request->tipo==2) { //operador
            $usuario->operador->cargo = $request->opeCargo;
            $usuario->operador->departamento = $request->opeDepartamento;
            $usuario->operador->save();
        } else { //paciente
            $usuario->paciente->celular = $request->pacCelular;
            $usuario->paciente->celularContactoEmergencia = $request->pacCelContacto;
            $usuario->paciente->contactoEmergencia = $request->pacContacto;
            $usuario->paciente->direccion = $request->pacDireccion;
            $usuario->paciente->save();
        }
        return redirect()->route('usuario.index')->with('success','Usuario actualizado correctamente');
    }
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('warning','Usuario eliminado correctamente');
    }
}
