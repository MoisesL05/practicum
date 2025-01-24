<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use Illuminate\Http\Request;

class CitaMedicaController extends Controller
{
    public function index() {
        if (auth()->user()->tipo==1) {
            $citas = CitaMedica::orderBy('id','desc')->where('idMedico',auth()->user()->medico->id)->paginate();
        } else if (auth()->user()->tipo==2) {
            $citas = CitaMedica::orderBy('id','desc')->paginate();
        } else {
            $citas = CitaMedica::orderBy('id','desc')->where('idPaciente',auth()->user()->paciente->id)->paginate();
        }
        return view('citamedica.index', compact('citas'));
    }
    public function create() {
        return view('citamedica.create');
    }
    public function store(Request $request)
    {
        $citamedica = new CitaMedica();
        $citamedica->idPaciente = $request->paciente;
        $idMed = explode('_',$request->medico);
        $citamedica->idMedico = $idMed[0];
        $citamedica->fecha = $request->fecha;
        $citamedica->hora = $request->hora;
        $citamedica->save();
        return redirect()->route('citamedica.index')->with('success','Cita médica creada correctamente');
    }
    public function show(CitaMedica $cita) {
        return view('citamedica.show',compact('cita'));
    }
    public function edit(CitaMedica $cita)
    {
        return view('citamedica.edit', compact('cita'));
    }
    public function update(Request $request, CitaMedica $cita)
    {
        //return $request;
        $cita->idPaciente = $request->paciente;
        $idMed = explode('_',$request->medico);
        $cita->idMedico = $idMed[0];
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->save();

        return redirect()->route('citamedica.index')->with('success','Cita médica actualizada correctamente');
    }
    public function destroy(CitaMedica $cita)
    {
        $cita->delete();
        return redirect()->route('citamedica.index')->with('success','Cita médica eliminada correctamente');

    }
}
