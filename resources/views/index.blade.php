@extends('layouts.ini')
@section('title', 'Bienvenido')

@section('content')
<div class="container w-100">
    <div class="fondo">
        <div class="login">
            <main class="form-signin m-auto" style="max-width: 100%!important">
                <h1 class="h3 mb-3 text-center fw-semibold text-primary">Bienvenido</h1>
                <div class="text-center">
                    <img class="mb-2" src="{{ asset('images/logoHIA.png') }}" alt="Logo" width="100" height="100">
                </div>
                <h2 class="text-center text-uppercase">Sistema de Control Administrativo</h2>
                <h3 class="text-center fw-bold">Hospital Isidro Ayora de Loja</h3>

                <div class="text-center">
                    <a class="btn btn-primary w-25 py-2 mt-3" href="{{ url('register') }}">Iniciar Sesión</a>
                    <a class="btn btn-warning w-25 py-2 mt-3" href="{{ url('register/create') }}">Registrarse</a>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
