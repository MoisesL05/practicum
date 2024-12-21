<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index() {
        return view('register.index');
    }
    public function create() {
        return view('register.create');
    }
    public function recovery() {
        return view('register.recovery');
    }
}
