@extends('layouts.app')
@section('title', 'Edición de usuario')

@section('nav')
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
        </symbol>
    </svg>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3 ml-auto">
                <li class="breadcrumb-item"><a class="link-body-emphasis" href="#">
                    <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
                    <span class="visually-hidden">Inicio</span></a></li>
                <li class="breadcrumb-item"><a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Usuario</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>

    </div>
@endsection

@section('content')
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3 mt-3">Editar usuario</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Se necesita nombre
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Se necesita apellido
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="username" class="form-label">Correo Electrónico</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" required>
                                    <div class="invalid-feedback">
                                        Se necesita correo electrónico
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="username" class="form-label">Contraseña</label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" id="password" required>
                                    <div class="invalid-feedback">
                                        Se necesita contraseña
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Cédula</label>
                                <input type="text" class="form-control" id="cedula" placeholder="" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Se necesita cédula
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="address" required>
                                <div class="invalid-feedback">
                                    Se necesita dirección
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Tipo de Usuario</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">Médico</option>
                                    <option value="2" selected>Operador</option>
                                    <option value="3">Directivo</option>
                                    <option value="4">Paciente</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-success" type="submit">Guardar</button>
                            <button class="btn btn-secondary" type="button">Volver</button>
                        </div>
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
