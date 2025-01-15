<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaMedicaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioAtencionController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\OperadorController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route:: controller(CitaMedicaController::class) -> group( function(){
    Route::get('/citamedica', [CitaMedicaController::class, 'index'])->name('citamedica.index');
    Route::get('/citamedica/create', [CitaMedicaController::class, 'create'])->name('citamedica.create');
    Route::get('/citamedica/edit', [CitaMedicaController::class, 'edit'])->name('citamedica.edit');
    Route::get('/citamedica/reagendar', [CitaMedicaController::class, 'reagendar'])->name('citamedica.reagendar');
    //Route::get('/usuario/show/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');
    Route::post('/citamedicas', [CitaMedicaController::class, 'store'])->name('citamedica.store');
    Route::post('/citamedicad', [CitaMedicaController::class, 'destroy'])->name('citamedica.destroy');
    Route::post('/citamedicau', [CitaMedicaController::class, 'update'])->name('citamedica.update');
});

Route:: controller(HorarioAtencionController::class) -> group( function(){
    //Route::get('/horario/{id}', [HorarioAtencionController::class, 'index'])->name('horario.index');
    Route::get('/horario', [HorarioAtencionController::class, 'index'])->name('horario.index');
    Route::get('/horario/create', [HorarioAtencionController::class, 'create'])->name('horario.create');
    Route::get('/horario/edit', [HorarioAtencionController::class, 'edit'])->name('horario.edit');
    Route::post('/horarios', [HorarioAtencionController::class, 'store'])->name('horario.store');
    Route::post('/horariod', [HorarioAtencionController::class, 'destroy'])->name('horario.destroy');
    Route::post('/horariou', [HorarioAtencionController::class, 'update'])->name('horario.update');
});

Route:: controller(MedicoController::class) -> group( function(){
    Route::get('/medico', 'index');
    Route::get('/medico/{idUsuario}', 'show');
});

Route:: controller(OperadorController::class) -> group( function(){
    Route::get('/operador', 'index');
    Route::get('/operador/{idUsuario}', 'show');
});

Route:: controller(PacienteController::class) -> group( function(){
    Route::get('/paciente', 'index');
    Route::get('/paciente/{idUsuario}', 'show');
});

Route:: controller(PerfilController::class) -> group( function(){
    Route::get('/perfil/medico', 'medico');
    Route::get('/perfil/operador', 'operador');
    Route::get('/perfil/directivo', 'directivo');
    Route::get('/perfil/paciente', 'paciente');
});

Route:: controller(RegistroController::class) -> group( function(){
    Route::get('/register', [RegistroController::class, 'index'])->name('register.index');
    Route::get('/register/create', [RegistroController::class, 'create'])->name('register.create');
    Route::get('/register/recovery', [RegistroController::class, 'recovery'])->name('register.recovery');
    Route::post('/register',[RegistroController::class, 'store'])->name('register.store');
    Route::post('/register',[RegistroController::class, 'login'])->name('register.login');
});

Route:: controller(UsuarioController::class) -> group( function(){
    Route::get('/usuario', [UsuarioController::class, 'index'])->middleware(['auth','verified'])->name('usuario.index');
    Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
    Route::get('/usuario/update', [UsuarioController::class, 'update'])->name('usuario.update');
    Route::get('/usuario/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::get('/usuario/destroy', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
    Route::get('/usuario/validate', [UsuarioController::class, 'validate'])->name('usuario.validate');
    Route::get('/usuario/show/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');
    Route::post('/usuario',[UsuarioController::class, 'store'])->name('usuario.store');
});
