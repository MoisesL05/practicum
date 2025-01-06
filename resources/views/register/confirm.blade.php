@extends('layouts.ini')
@section('title', 'Confirmación de usuario creado')

@section('content')
<div class="container w-100">
    <div class="fondore">
        <div class="login">
            <main class="form-signin m-auto" style="max-width: 100%!important">
                <form class="needs-validation" novalidate>
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img class="mb-2" src="{{ asset('images/logoHIA.png') }}" alt="Logo" width="100" height="100"></a>
                        <h1 class="h3 mb-3 fw-normal">Confirmación exitosa</h1>
                    </div>
                    <p>Su cuenta ha sido activada correctamente, ya puede iniciar sesión.</p>
                    <div class="text-center">
                        <a class="btn btn-primary w-50 py-2 mt-3" href="{{ url('/register') }}">Iniciar sesión</a>
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
