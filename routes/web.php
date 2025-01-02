<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaMedicaController;
use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioAtencionController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\OperadorController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RegistroHistoriaClinicaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ValorPorCobrarController;


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
    Route::get('/citamedica', 'index');
    Route::get('/citamedica/create', 'create');
    Route::get('/citamedica/update', 'update');
    Route::get('/citamedica/delete', 'delete');
    Route::get('/citamedica/end', 'end');
    Route::get('/citamedica/{id}', 'show');
});

Route:: controller(HistoriaClinicaController::class) -> group( function(){
    Route::get('/historia', 'index');
    Route::get('/historia/create', 'create');
    Route::get('/historia/update', 'update');
    Route::get('/historia/delete', 'delete');
    Route::get('/historia/{id}', 'show');
});

Route:: controller(HorarioAtencionController::class) -> group( function(){
    Route::get('/horario', 'index');
    Route::get('/horario/create', 'create');
    Route::get('/horario/update', 'update');
    Route::get('/horario/delete', 'delete');
    Route::get('/horario/{idMedico}', 'show');
});

Route:: controller(MedicoController::class) -> group( function(){
    Route::get('/medico', 'index');
    Route::get('/medico/create', 'create');
    Route::get('/medico/update', 'update');
    Route::get('/medico/delete', 'delete');
    Route::get('/medico/{idUsuario}', 'show');
});

Route:: controller(OperadorController::class) -> group( function(){
    Route::get('/operador', 'index');
    Route::get('/operador/create', 'create');
    Route::get('/operador/update', 'update');
    Route::get('/operador/delete', 'delete');
    Route::get('/operador/{idUsuario}', 'show');
});

Route:: controller(PacienteController::class) -> group( function(){
    Route::get('/paciente', 'index');
    Route::get('/paciente/create', 'create');
    Route::get('/paciente/update', 'update');
    Route::get('/paciente/delete', 'delete');
    Route::get('/paciente/{idUsuario}', 'show');
});

Route:: controller(PerfilController::class) -> group( function(){
    Route::get('/perfil/medico', 'medico');
    Route::get('/perfil/operador', 'operador');
    Route::get('/perfil/directivo', 'directivo');
    Route::get('/perfil/paciente', 'paciente');
});

Route:: controller(RegistroController::class) -> group( function(){
    Route::get('/register', 'index');
    Route::get('/register/create', 'create');
    Route::get('/register/recovery', 'recovery');
});

Route:: controller(RegistroHistoriaClinicaController::class) -> group( function(){
    Route::get('/registrohc', 'index');
    Route::get('/registrohc/create', 'create');
    Route::get('/registrohc/update', 'update');
    Route::get('/registrohc/delete', 'delete');
    Route::get('/registrohc/{id}', 'show');
});

Route:: controller(UsuarioController::class) -> group( function(){
    Route::get('/usuario', 'index');
    Route::get('/usuario/create', 'create');
    Route::get('/usuario/update', 'update');
    Route::get('/usuario/delete', 'delete');
    Route::get('/usuario/validate', 'validate');
    Route::get('/usuario/{nombre}/{email?}', 'show');
});

Route:: controller(ValorPorCobrarController::class) -> group( function(){
    Route::get('/valor', 'index');
    Route::get('/valor/create', 'create');
    Route::get('/valor/update', 'update');
    Route::get('/valor/delete', 'delete');
    Route::get('/valor/{id}', 'show');
});
