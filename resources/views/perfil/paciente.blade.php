@extends('layouts.app')
@section('title', 'Perfil de Paciente')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">HIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                                <svg class="bi"> <use xlink:href="#house-fill" /> </svg>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi"> <use xlink:href="#file-earmark" /> </svg>
                                Nueva cita médica
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi"> <use xlink:href="#file-earmark-text" /> </svg>
                                Historial de citas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi"> <use xlink:href="#calendar3" /> </svg>
                                Tratamientos
                            </a>
                        </li>
                    </ul>

                    <hr class="my-3">

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi"> <use xlink:href="#gear-wide-connected" /> </svg>
                                Perfil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="#">
                                <svg class="bi"> <use xlink:href="#door-closed" /> </svg>
                                Salir del Sistema
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            {{-- CITAS --}}
            <h3 class="mt-3">Mis próximas citas</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary text-end">Medicina General</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-end">Dr. Juan Pérez</h6>
                                <p class="card-text mb-0"><strong>Fecha:</strong> Lunes, 6 de Enero de 2025</p>
                                <p class="card-text mt-0 mb-1"><strong>Hora</strong> 09:30</p>
                                <a href="#" class="card-link mt-0">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary text-end">Odontología</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-end">Dra. María Vera</h6>
                                <p class="card-text mb-0"><strong>Fecha:</strong> Martes, 7 de Enero de 2025</p>
                                <p class="card-text mt-0 mb-1"><strong>Hora</strong> 09:30</p>
                                <a href="#" class="card-link mt-0">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary text-end">Cardiología</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-end">Dr. Pedro Mero</h6>
                                <p class="card-text mb-0"><strong>Fecha:</strong> Miércoles, 8 de Enero de 2025</p>
                                <p class="card-text mt-0 mb-1"><strong>Hora</strong> 09:30</p>
                                <a href="#" class="card-link mt-0">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="text-center my-3"><a href="#">Ver todas las citas</a></h6>

            {{-- TRATAMIENTOS --}}
            <h3 class="mt-3">Mis últimos tratamientos</h3>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary text-end">Medicina General</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-end">Dr. Juan Pérez</h6>
                                <a href="#" class="card-link mt-0">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary text-end">Odontología</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-end">Dra. María Vera</h6>
                                <a href="#" class="card-link mt-0">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-primary text-end">Cardiología</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary text-end">Dr. Pedro Mero</h6>
                                <a href="#" class="card-link mt-0">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="text-center my-3"><a href="#">Ver todos los tratamientos</a></h6>
        </main>
    </div>
</div>
@endsection
