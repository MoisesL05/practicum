@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Citas Médicas')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol  id="edit" viewBox="0 0 24 24">
        <path d="M20.9888 4.28491L19.6405 2.93089C18.4045 1.6897 16.4944 1.6897 15.2584 2.93089L13.0112 5.30042L18.7416 11.055L21.1011 8.68547C21.6629 8.1213 22 7.33145 22 6.54161C22 5.75176 21.5506 4.84908 20.9888 4.28491Z" />
        <path d="M16.2697 10.9422L11.7753 6.42877L2.89888 15.3427C2.33708 15.9069 2 16.6968 2 17.5994V21.0973C2 21.5487 2.33708 22 2.89888 22H6.49438C7.2809 22 8.06742 21.6615 8.74157 21.0973L17.618 12.1834L16.2697 10.9422Z" />
    </symbol>
    <symbol id="delete" viewBox="0 0 24 24">
        <path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/>
    </symbol>
    <symbol id="reagendar" viewBox="0 0 24 24">
        <path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/>
    </symbol>
</svg>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row my-3">
            <div class="col">
                <h4 class="mb-0">Citas Médicas</h4><br>
            </div>
            <div class="col text-end">
                <a class="btn btn-primary" type="button" href="{{ url('citamedica/create') }}">Nuevo</a>
            </div>
        </div>
    </div>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" style="width: 20%">Paciente</th>
                    <th scope="col" style="width: 20%">Especialidad</th>
                    <th scope="col" style="width: 20%">Médico</th>
                    <th scope="col" style="width: 10%">Fecha</th>
                    <th scope="col" style="width: 10%">Hora</th>
                    <th scope="col" style="width: 10%">Estado</th>
                    <th scope="col" style="width: 10%">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lia Chavez</td>
                    <td>Medicina General</td>
                    <td>Dra. Valeria Santos</td>
                    <td>20/01/2025</td>
                    <td>10:00</td>
                    <td>Pendiente</td>
                    <td class="text-center">
                        <a href="{{ route('citamedica.reagendar', 1) }}" title="Reagendar"><svg class="bi text-success"><use xlink:href="#reagendar" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
                <tr>
                    <td>Lia Chavez</td>
                    <td>Medicina General</td>
                    <td>Dra. Valeria Santos</td>
                    <td>20/01/2025</td>
                    <td>10:00</td>
                    <td>Pendiente</td>
                    <td class="text-center">
                        <a href="{{ route('citamedica.reagendar', 1) }}" title="Reagendar"><svg class="bi text-success"><use xlink:href="#reagendar" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
                <tr>
                    <td>Lia Chavez</td>
                    <td>Medicina General</td>
                    <td>Dra. Valeria Santos</td>
                    <td>20/01/2025</td>
                    <td>10:00</td>
                    <td>Pendiente</td>
                    <td class="text-center">
                        <a href="{{ route('citamedica.reagendar', 1) }}" title="Reagendar"><svg class="bi text-success"><use xlink:href="#reagendar" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
                <tr>
                    <td>Lia Chavez</td>
                    <td>Medicina General</td>
                    <td>Dra. Valeria Santos</td>
                    <td>20/01/2025</td>
                    <td>10:00</td>
                    <td>Pendiente</td>
                    <td class="text-center">
                        <a href="{{ route('citamedica.reagendar', 1) }}" title="Reagendar"><svg class="bi text-success"><use xlink:href="#reagendar" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('citamedica.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
