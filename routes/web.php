<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;

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
});

Route:: controller(UsuarioController::class) -> group( function(){
    Route::get('/usuario', 'index');
    Route::get('/usuario/create', 'create');
    Route::get('/usuario/{nombre}/{email?}', 'show');
});
