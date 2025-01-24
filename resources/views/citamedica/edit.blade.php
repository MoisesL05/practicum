<?php
    use App\Models\Paciente;
    use App\Models\Medico;
?>
@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Editar cita médica')

@section('content')

<script>
    function cambiarEspecialidad(id) {
        separado = id.split('_')
        document.getElementById('especialidad').value=separado[1]
    }
</script>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row g-5">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3 mt-3">Editar cita médica</h4>
            <form action="{{route('citamedica.update', $cita->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-1">
                    <div class="col-sm-12 mt-2">
                        <label for="paciente" class="form-label mb-0">Paciente</label>
                        <select class="form-select p-1" id="paciente" name="paciente" aria-label="Default select example" onchange="">
                            <?php
                                $pacientes = Paciente::select('*')->get();
                            ?>
                            @foreach ($pacientes as $paciente)
                                @if ($cita->idPaciente==$paciente->id)
                                    <option selected value="{{$paciente->id}}">{{$paciente->usuario->nombre.' '.$paciente->usuario->apellido}}</option>
                                @else
                                    <option value="{{$paciente->id}}">{{$paciente->usuario->nombre.' '.$paciente->usuario->apellido}}</option>
                                @endif
                            @endforeach
                        </select>
                        <input type="hidden" id="pacienteH" name="pacienteH" value="{{$cita->idPaciente}}">
                    </div>
                    <div class="col-sm-12 mt-2">
                        <label for="medico" class="form-label mb-0">Médico (Especialidad)</label>
                        <select class="form-select p-1" id="medico" name="medico" aria-label="Default select example"  onchange="cambiarEspecialidad(this.value)">
                            <?php
                                $medicos = Medico::select('*')->get();
                            ?>
                            @foreach ($medicos as $medico)
                                @if ($medico->id==$cita->idMedico)
                                    <option selected value="{{$medico->id.'_'.$medico->especialidad}}">{{$medico->usuario->nombre.' '.$medico->usuario->apellido.' ('.$medico->especialidad.')'}}</option>
                                @else
                                    <option value="{{$medico->id.'_'.$medico->especialidad}}">{{$medico->usuario->nombre.' '.$medico->usuario->apellido.' ('.$medico->especialidad.')'}}</option>
                                @endif
                            @endforeach
                        </select>
                        <input type="hidden" id="especialidad" name="especialidad" value="{{$cita->medico->especialidad}}">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="fecha" class="form-label mb-0">Fecha</label>
                        <input type="date" class="form-control p-1" id="fecha" name="fecha" placeholder="" value="{{ $cita->fecha }}">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="hora" class="form-label mb-0">Hora</label>
                        <input type="time" class="form-control p-1" id="hora" name="hora" value="{{ $cita->hora }}" min="07:00" max="19:00">
                    </div>
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <a class="btn btn-secondary" type="button" href="{{ url('citamedica') }}">Volver</a>
                </div>
            </form>
        </div>
    </div>
</main>

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
