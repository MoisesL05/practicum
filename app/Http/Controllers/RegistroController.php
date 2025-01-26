<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

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
        $user = Usuario::create($request->all());

        event(new Registered($user));

        $idUsuarioCreado = Usuario::latest('id')->first()->id;

        $paciente = new Paciente();
        $paciente->idUSuario = $idUsuarioCreado;
        $paciente->direccion = $request->direccion;
        $paciente->save();

        $credentials = $request->only('correo', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
	        //return redirect()->route('register.index')->with('success','Usuario creado correctamente, revise su correo y siga las indicaciones');
            return redirect()->route('register.index')->with('success','Usuario creado correctamente, inicie sesión');
	    }
    }
    public function login(Request $request) {
        $request->validate([
	        'correo' => 'required',
	        'password' => 'required'
	    ]);
	    $credentials = $request->only('correo', 'password');

        $remember = ($request->has('remember') ? true : false);
	    if (Auth::attempt($credentials,$remember)) {
            $request->session()->regenerate();
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
