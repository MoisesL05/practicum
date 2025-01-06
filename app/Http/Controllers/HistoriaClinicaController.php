<?php

namespace App\Http\Controllers;

use App\Models\HistoriaClinica;
use Illuminate\Http\Request;

class HistoriaClinicaController extends Controller
{
    public function index() {
        return view('historia.index');
    }
    public function create() {
        return view('historia.create');
    }
    public function update() {
        return view('historia.update');
    }
}
