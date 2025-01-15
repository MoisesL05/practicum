@extends( config('logging.user_type')==1 ? 'layouts.medico' : (config('logging.user_type')==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Creación de horario de atención')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row g-5">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3 mt-3">Crear horario de atención</h4>
                <form class="needs-validation" novalidate method="POST" action="{{route('horario.store')}}">
                    @csrf
                    <div class="row g-3 mb-3">
                        <div class="col-sm-4 mt-2">
                            <label for="diaDeSemana" class="form-label mb-0">Día de la semana</label>
                            <select class="form-select p-1" id="diaDeSemana" name="diaDeSemana" aria-label="selectDiaSemana">
                                <option value="1" selected>Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miércoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sábado</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <label for="horaInicio" class="form-label mb-0">Hora Inicio de Atención</label>
                            <input type="time" class="form-control p-1" id="horaInicio" name="horaInicio" placeholder="" value="07:00" min="07:00" max="19:00">
                        </div>
                        <div class="col-sm-4 mt-2">
                            <label for="horaFin" class="form-label mb-0">Hora Final de Atención</label>
                            <input type="time" class="form-control p-1" id="horaFin" name="horaFin" placeholder="" value="19:00" min="07:00" max="19:00">
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-success" type="submit">Guardar</button>
                        <a class="btn btn-secondary" type="button" href="{{ url('horario') }}">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
