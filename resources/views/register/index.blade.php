@extends('layouts.ini')
@section('title', 'Iniciar Sesión')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

@section('content')
    @if (Session::has('success'))
        <script>alert('{{ Session::get('success') }}');</script>
    @endif
    <div class="container w-100">
        <div class="fondore">
            <div class="login">
                <main class="form-signin m-auto" style="max-width: 100%!important">
                    <form class="needs-validation" novalidate method="POST" action="{{route('register.login')}}">
                        @csrf
                        <div class="text-center">
                            <a href="{{ url('/') }}"><img class="mb-2" src="{{ asset('images/logoHIA.png') }}"
                                    alt="Logo" width="100" height="100"></a>
                            <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@ejemplo.com"
                                required>
                            <label for="correo">Correo Electrónico</label>
                            <div class="invalid-feedback">
                                Se necesita correo electrónico
                            </div>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                                required>
                            <label for="password">Contraseña</label>
                            <div class="invalid-feedback">
                                Se necesita contraseña
                            </div>
                        </div>
                        <div class="form-check text-start my-3">
                            <input class="form-check-input" type="checkbox" value="remember-me" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                              Recordarme
                            </label>
                          </div>
                        {{-- <div class="form-floating text-center">
                            <a href="{{ url('/register/recovery') }}">Olvidó su contraseña</a>
                        </div> --}}
                        <div class="text-center">
                            <button class="btn btn-primary w-25 py-2 mt-3" type="submit">Ingresar</button>
                            <a class="btn btn-warning w-25 py-2 mt-3" href="{{ url('register/create') }}">Registrarse</a>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
