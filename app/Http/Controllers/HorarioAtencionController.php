<?php

namespace App\Http\Controllers;

use App\Models\HorarioAtencion;
use Illuminate\Http\Request;

class HorarioAtencionController extends Controller
{
    public function index()
    {
        $horarios = HorarioAtencion::orderBy('id','asc')->where('idMedico',auth()->user()->medico->id)->paginate();
        return view('horario.index', compact('horarios'));
    }
    public function create()
    {
        return view('horario.create');
    }
    public function store(Request $request)
    {
        if (auth()->user()->tipo==1) {
            $horario = new HorarioAtencion();
            $horario->idMedico = auth()->user()->medico->id;
            $horario->diaDeSemana = $request->diaDeSemana;
            $horario->horaInicio = $request->horaInicio;
            $horario->horaFin = $request->horaFin;
            $horario->save();
            return redirect()->route('horario.index')->with('success','Horario de atención creado correctamente');
        } else {
            return redirect()->route('horario.index')->with('warning','El usuario actual no es médico');
        }
    }
    public function edit(HorarioAtencion $horario)
    {
        return view('horario.edit', compact('horario'));
    }
    public function update(Request $request, HorarioAtencion $horario)
    {
        $horario->diaDeSemana = $request->diaDeSemana;
        $horario->horaInicio = $request->horaInicio;
        $horario->horaFin = $request->horaFin;
        $horario->save();

        return redirect()->route('horario.index')->with('success','Horario de atención actualizado correctamente');
    }
    public function destroy($id)
    {
        $horario = HorarioAtencion::findOrFail($id);
        $horario->delete();
        return redirect()->route('horario.index')->with('warning','Horario de atención eliminado correctamente');

    }
}
