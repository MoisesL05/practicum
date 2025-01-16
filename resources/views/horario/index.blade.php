@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Horario de atención')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol  id="edit" viewBox="0 0 24 24">
        <path d="M20.9888 4.28491L19.6405 2.93089C18.4045 1.6897 16.4944 1.6897 15.2584 2.93089L13.0112 5.30042L18.7416 11.055L21.1011 8.68547C21.6629 8.1213 22 7.33145 22 6.54161C22 5.75176 21.5506 4.84908 20.9888 4.28491Z" />
        <path d="M16.2697 10.9422L11.7753 6.42877L2.89888 15.3427C2.33708 15.9069 2 16.6968 2 17.5994V21.0973C2 21.5487 2.33708 22 2.89888 22H6.49438C7.2809 22 8.06742 21.6615 8.74157 21.0973L17.618 12.1834L16.2697 10.9422Z" />
    </symbol>
    <symbol id="delete" viewBox="0 0 24 24">
        <path d="M7 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2h4a1 1 0 1 1 0 2h-1.069l-.867 12.142A2 2 0 0 1 17.069 22H6.93a2 2 0 0 1-1.995-1.858L4.07 8H3a1 1 0 0 1 0-2h4V4zm2 2h6V4H9v2zM6.074 8l.857 12H17.07l.857-12H6.074zM10 10a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1z"/>
    </symbol>
    <symbol id="ver" viewBox="0 0 24 24">
        <path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
    </symbol>
</svg>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row my-3">
            <div class="col">
                <h4>Horarios de atención</h4>
                <span class="small">Dr. Juan Pérez</span>
            </div>

        <div class="col text-end">
            <a class="btn btn-primary" type="button" href="{{ url('horario/create') }}">Nuevo</a>
        </div>
        </div>
    </div>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col" style="width: 30%">Día</th>
                    <th scope="col" style="width: 30%">Hora Inicio</th>
                    <th scope="col" style="width: 30%">Hora Fin</th>
                    <th scope="col" style="width: 10%">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lunes</td>
                    <td>15:00</td>
                    <td>18:00</td>
                    <td class="text-center">
                        <a href="{{ route('horario.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('horario.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td>15:00</td>
                    <td>18:00</td>
                    <td class="text-center">
                        <a href="{{ route('horario.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('horario.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>14:00</td>
                    <td>17:00</td>
                    <td class="text-center">
                        <a href="{{ route('horario.edit', 1) }}" title="Editar"><svg class="bi"><use xlink:href="#edit" /></svg></a>
                        <a href="{{ route('horario.edit', 1) }}" title="Eliminar"><svg class="bi text-danger"><use xlink:href="#delete" /></svg></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
