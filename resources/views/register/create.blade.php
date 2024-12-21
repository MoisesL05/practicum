@extends('layouts.ini')
@section('title', 'Registrar Paciente')

@section('content')
<div class="container w-100">
    <div class="fondore">
        <div class="login">
            <main class="m-auto" style="max-width: 100%!important">
                <form class="needs-validation" novalidate>
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img class="mb-2" src="{{ asset('images/logoHIA.png') }}" alt="Logo" width="100" height="100"></a>
                        <h1 class="h3 mb-3 fw-normal">Registro de Paciente</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6 mt-2">
                            <label for="nombre" class="form-label mb-0">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="apellido" class="form-label mb-0">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="" value="" required>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <label for="email" class="form-label mb-0">Correo Electrónico</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="password" class="form-label mb-0">Contraseña</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="password" required pattern="^[_a-zA-Z0-9\-]{5,15}$">
                            </div>
                            <small>Letras y números (5 a 15)</small>
                        </div><div class="col-sm-6 mt-2">
                            <label for="passwordConf" class="form-label mb-0">Confirmar Contraseña</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="passwordConf" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="cedula" class="form-label mb-0">Cédula</label>
                            <input type="text" class="form-control" id="cedula" placeholder="" value="" required>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="direccion" class="form-label mb-0">Dirección</label>
                            <input type="text" class="form-control" id="direccion" required>
                        </div>
                        <input type="hidden" id="tipo" value="4">
                    </div>
                    <small><p class="text-danger">Todos los campos son obligatorios</p></small>
                    <div class="text-center">
                        <button class="btn btn-primary w-25 py-2 mt-3" type="submit">Registrar</button>
                    </div>
                </form>
                <div class="form-floating text-center mt-1">
                    ¿Ya es usuario? <a href="{{ url('/register') }}">Iniciar sesión</a>
                </div>
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
                if (document.getElementById("password").value != document.getElementById("passwordConf").value) {
                    alert("Las contraseñas no coinciden");
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
