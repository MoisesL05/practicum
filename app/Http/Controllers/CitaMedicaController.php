<?php

namespace App\Http\Controllers;

use App\Models\CitaMedica;
use Illuminate\Http\Request;

class CitaMedicaController extends Controller
{
    public function index() {
        return view('citamedica.index');
    }
    public function create() {
        return view('citamedica.create');
    }
    public function update() {
        return view('citamedica.update');
    }
}
