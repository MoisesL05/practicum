<?php

namespace App\Http\Controllers;

use App\Models\HorarioAtencion;
use Illuminate\Http\Request;

class HorarioAtencionController extends Controller
{
    public function index() {
        // $horario = HorarioAtencion::orderBy('id','desc')->paginate();
        // return view('horario.index', compact('horario'));
        return view('horario.index');
    }
    public function create() {
        return view('horario.create');
    }
    public function store(Request $request)
    {
        HorarioAtencion::create($request->all());
        return redirect()->route('horario')->with('success','Horario de atención creado correctamente');
    }
    public function show(HorarioAtencion $horario) {
        return view('horario.show',compact('horario'));
    }
    public function edit(HorarioAtencion $horario)
    {
        return view('horario.edit', compact('horario'));
    }
    public function update(Request $request, HorarioAtencion $horario)
    {
        $horario->update($request->all());
        return redirect()->route('horario.index')->with('success','Horario de atención actualizado correctamente');
    }
    public function destroy(HorarioAtencion $horario)
    {
        $horario->delete();
        return redirect()->route('horario.index')->with('success','Horario de atención eliminado correctamente');

    }
}
