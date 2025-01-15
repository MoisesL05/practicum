<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use Illuminate\Http\Request;

class CitaMedicaController extends Controller
{
    public function index() {
        // $horario = HorarioAtencion::orderBy('id','desc')->paginate();
        // return view('horario.index', compact('horario'));
        return view('citamedica.index');
    }
    public function create() {
        return view('citamedica.create');
    }
    public function store(Request $request)
    {
        CitaMedica::create($request->all());
        return redirect()->route('citamedica')->with('success','Cita médica creada correctamente');
    }
    public function show(CitaMedica $citamedica) {
        return view('citamedica.show',compact('citamedica'));
    }
    public function edit(CitaMedica $citamedica)
    {
        return view('citamedica.edit', compact('citamedica'));
    }
    public function reagendar(CitaMedica $citamedica)
    {
        return view('citamedica.reagendar', compact('citamedica'));
    }
    public function update(Request $request, CitaMedica $citamedica)
    {
        $citamedica->update($request->all());
        return redirect()->route('citamedica.index')->with('success','Cita médica actualizada correctamente');
    }
    public function destroy(CitaMedica $citamedica)
    {
        $citamedica->delete();
        return redirect()->route('citamedica.index')->with('success','Cita médica eliminada correctamente');

    }
}
