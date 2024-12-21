<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PefilController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RegistroController;

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

Route:: controller(RegistroController::class) -> group( function(){
    Route::get('/register', 'index');
    Route::get('/register/create', 'create');
    Route::get('/register/recovery', 'recovery');
});

Route:: controller(PerfilController::class) -> group( function(){
    Route::get('/perfil/medico', 'medico');
    Route::get('/perfil/operador', 'operador');
    Route::get('/perfil/directivo', 'directivo');
    Route::get('/perfil/paciente', 'paciente');
});

Route:: controller(UsuarioController::class) -> group( function(){
    Route::get('/usuario', 'index');
    Route::get('/usuario/create', 'create');
    Route::get('/usuario/update', 'update');
    Route::get('/usuario/{nombre}/{email?}', 'show');
});
