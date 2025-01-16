<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function index() {
        return view('register.index');
    }
    public function create() {
        return view('register.create');
    }
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuario.index')->with('success','Usuario creado correctamente, revise su correo y siga las indicaciones');
    }
    public function login(Request $request) {
        $request->validate([
	        'correo' => 'required',
	        'password' => 'required'
	    ]);
	    $credentials = $request->only('correo', 'password');

        $remember = ($request->has('remember') ? true : false);
	    if (Auth::attempt($credentials,$remember)) {
	        return redirect()->intended(route('dashboard.index'));
	    }

	    return redirect("register")->withSuccess('El correo o la contraseña son incorrectos');
    }
    public function recovery() {
        return view('register.recovery');
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
	    return redirect("register")->withSuccess('Sesión finalizada');
    }
}
