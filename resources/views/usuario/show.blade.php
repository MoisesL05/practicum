@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Información de usuario')

@section('content')
    {{-- @if($email==null)
        <h1>Hola, {{$nombre}}.</h1><br>
    @else
        <h1>Hola, {{$nombre}}. Email: {{$email}}</h1><br>
    @endif --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h4 class="my-3">Información de usuario</h4>
        <div class="mb-3">
            <h6 class="my-0 small">Nombre</h6>
            <span class="text-body-secondary">{{$usuario->nombre}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Apellido</h6>
            <span class="text-body-secondary">{{$usuario->apellido}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Cédula</h6>
            <span class="text-body-secondary">{{$usuario->cedula}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Correo</h6>
            <span class="text-body-secondary">{{$usuario->correo}}</span>
        </div>
        <div class="mb-3">
            <h6 class="my-0 small">Tipo de Usuario</h6>
            <span class="text-body-secondary">@if ($usuario->tipo==1)
                Médico
            @elseif ($usuario->tipo==2)
                Operador
            @else
                Paciente
            @endif</span>
        </div>
        <div class="text-end">
            <a class="btn btn-secondary" type="button" href="{{ url('usuario') }}">Ver Todos</a>
        </div>
    </main>
@endsection

