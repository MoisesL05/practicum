<?php
    use App\Models\CitaMedica;
    use App\Models\Paciente;
    use App\Models\Medico;
?>
@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Dashboard')

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
    <h3 class="mt-3">Mis próximas citas</h3>
    <div class="container">
        <div class="row">
            <?php
                if (auth()->user()->tipo==1) {
                    $citas = CitaMedica::select('*')->where('idMedico',auth()->user()->medico->id)->orderBy('id','desc')->limit('3')->get();
                } else if (auth()->user()->tipo==2) {
                    $citas = CitaMedica::select('*')->orderBy('id','desc')->limit('3')->get();
                } else {
                    $citas = CitaMedica::select('*')->where('idPaciente',auth()->user()->paciente->id)->orderBy('id','desc')->limit('3')->get();
                }

            ?>
            @foreach ($citas as $cita)
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title text-primary text-end">{{ $cita->medico->especialidad }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary text-end"><b>Dr(a): </b>{{ $cita->medico->usuario->nombre.' '.$cita->medico->usuario->apellido }}</h6>
                            <p class="card-text mb-0"><strong>Paciente: </strong>{{ $cita->paciente->usuario->nombre.' '.$cita->paciente->usuario->apellido }}</p>
                            <p class="card-text mb-0"><strong>Fecha: </strong>{{ $cita->fecha }}</p>
                            <p class="card-text mt-0 mb-0"><strong>Hora </strong>{{ $cita->hora }}</p>
                            {{-- 1-Pendiente 2-Perdida 3-Finalizada --}}
                            <p class="card-text mt-0 mb-1"><strong>Estado </strong>@if ($cita->estado==1) Pendiente @elseif ($cita->estado==2) Perdida @else Finalizada @endif</p>
                            {{-- <a href="#" class="card-link mt-0">Ver detalles</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <h6 class="text-center my-3"><a href="{{ url('citamedica') }}">Ver todas las citas</a></h6>
    {{-- TRATAMIENTOS --}}
    {{-- <h3 class="mt-3">Mis últimos tratamientos</h3>
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
    <h6 class="text-center my-3"><a href="#">Ver todos los tratamientos</a></h6> --}}

</main>
@endsection
