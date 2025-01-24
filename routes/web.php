<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaMedicaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioAtencionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route:: controller(DashboardController::class) -> group( function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard.index');
});

Route:: controller(CitaMedicaController::class) -> group( function(){
    Route::get('/citamedica', [CitaMedicaController::class, 'index'])->middleware(['auth'])->name('citamedica.index');
    Route::get('/citamedica/create', [CitaMedicaController::class, 'create'])->middleware(['auth'])->name('citamedica.create');
    Route::put('/citamedica/{cita}', [CitaMedicaController::class, 'update'])->middleware(['auth'])->name('citamedica.update');
    Route::get('/citamedica/edit/{cita}', [CitaMedicaController::class, 'edit'])->middleware(['auth'])->name('citamedica.edit');
    Route::delete('/citamedicad/{cita}', [CitaMedicaController::class, 'destroy'])->middleware(['auth'])->name('citamedica.destroy');
    Route::get('/citamedica/show/{cita}', [CitaMedicaController::class, 'show'])->middleware(['auth'])->name('citamedica.show');
    Route::post('/citamedica',[CitaMedicaController::class, 'store'])->middleware(['auth'])->name('citamedica.store');
});

Route:: controller(HorarioAtencionController::class) -> group( function(){
    Route::get('/horario', [HorarioAtencionController::class, 'index'])->middleware(['auth'])->name('horario.index');
    Route::get('/horario/create', [HorarioAtencionController::class, 'create'])->middleware(['auth'])->name('horario.create');
    Route::put('/horario/{horario}', [HorarioAtencionController::class, 'update'])->middleware(['auth'])->name('horario.update');
    Route::get('/horario/edit/{horario}', [HorarioAtencionController::class, 'edit'])->middleware(['auth'])->name('horario.edit');
    Route::delete('/horariod/{horario}', [HorarioAtencionController::class, 'destroy'])->middleware(['auth'])->name('horario.destroy');
    Route::post('/horario',[HorarioAtencionController::class, 'store'])->middleware(['auth'])->name('horario.store');
});

Route:: controller(RegistroController::class) -> group( function(){
    Route::get('/register', [RegistroController::class, 'index'])->name('register.index');
    Route::get('/register/create', [RegistroController::class, 'create'])->name('register.create');
    Route::get('/register/recovery', [RegistroController::class, 'recovery'])->name('register.recovery');
    Route::post('/registers',[RegistroController::class, 'store'])->name('register.store');
    Route::post('/registeri',[RegistroController::class, 'login'])->name('register.login');
    Route::post('/registero',[RegistroController::class, 'logout'])->name('register.logout');
});

Route:: controller(UsuarioController::class) -> group( function(){
    Route::get('/usuario', [UsuarioController::class, 'index'])->middleware(['auth'])->name('usuario.index');
    Route::get('/usuario/create', [UsuarioController::class, 'create'])->middleware(['auth'])->name('usuario.create');
    Route::put('/usuario/{usuario}', [UsuarioController::class, 'update'])->middleware(['auth'])->name('usuario.update');
    Route::get('/usuario/edit/{usuario}', [UsuarioController::class, 'edit'])->middleware(['auth'])->name('usuario.edit');
    Route::delete('/usuariod/{usuario}', [UsuarioController::class, 'destroy'])->middleware(['auth'])->name('usuario.destroy');
    Route::get('/usuario/show/{usuario}', [UsuarioController::class, 'show'])->middleware(['auth'])->name('usuario.show');
    Route::post('/usuario',[UsuarioController::class, 'store'])->middleware(['auth'])->name('usuario.store');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Enviado link de verificación');
    //return redirect()->route('register.index')->with('success','Enviado link de verificación');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
