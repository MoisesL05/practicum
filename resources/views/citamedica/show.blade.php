@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Cita médica')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h4 class="my-3">Información de cita médica</h4>
        <div class="mb-3">
            <h6 class="my-0 small">Paciente</h6>
            <span class="text-body-secondary">{{$cita->paciente->usuario->nombre.' '.$cita->paciente->usuario->apellido}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Especialidad</h6>
            <span class="text-body-secondary">{{$cita->medico->especialidad}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Médico</h6>
            <span class="text-body-secondary">{{$cita->medico->usuario->nombre.' '.$cita->medico->usuario->apellido}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Fecha</h6>
            <span class="text-body-secondary">{{$cita->fecha}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Hora</h6>
            <span class="text-body-secondary">{{$cita->hora}}</span>
        </div>
        <div class="text-end">
            <a class="btn btn-secondary" type="button" href="{{ url('citamedica') }}">Ver Todos</a>
        </div>
    </main>
@endsection

