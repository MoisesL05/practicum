@extends('layouts.app')
@section('title', 'Creacionn de usuario')

@section('content')
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3 mt-3">Crear nuevo usuario</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Se necesita nombre
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Se necesita apellido
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="username" class="form-label">Correo Electrónico</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Se necesita correo electrónico
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" required>
                                <div class="invalid-feedback">
                                    Se necesita dirección
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </main>
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
