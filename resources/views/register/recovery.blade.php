@extends('layouts.ini')
@section('title', 'Recuperar Contraseña')

@section('content')
<div class="container w-100">
    <div class="fondore">
        <div class="login">
            <main class="form-signin m-auto" style="max-width: 100%!important">
                <form class="needs-validation" novalidate>
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img class="mb-2" src="{{ asset('images/logoHIA.png') }}" alt="Logo" width="100" height="100"></a>
                        <h1 class="h3 mb-3 fw-normal">Recuperar Contraseña</h1>
                    </div>
                    <p>Ingrese el correo electrónico registrado en el sistema y le enviaremos las instrucciones para recuperar su contraseña</p>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="correo@ejemplo.com" required>
                        <label for="floatingInput">Correo Electrónico</label>
                        <div class="invalid-feedback">
                            Se necesita correo electrónico
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary w-25 py-2 mt-3" type="submit">Enviar</button>
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
