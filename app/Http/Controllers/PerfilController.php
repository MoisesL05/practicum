<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function medico() {
        return view('perfil.medico');
    }
    public function operador() {
        return view('perfil.operador');
    }
    public function directivo() {
        return view('perfil.directivo');
    }
    public function paciente() {
        return view('perfil.paciente');
    }
}
