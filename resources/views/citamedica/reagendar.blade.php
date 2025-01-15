@extends( config('logging.user_type')==1 ? 'layouts.medico' : (config('logging.user_type')==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Reagendar cita médica')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row g-5">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3 mt-3">Reagendar cita médica</h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3 mb-1">
                    <div class="col-sm-12 mt-2">
                        <label for="paciente" class="form-label mb-0">Paciente</label>
                        <select class="form-select p-1" id="paciente" aria-label="Default select example" onchange="" disabled>
                            <option value="1" selected>Dereck Chávez</option>
                            <option value="2">Lía Chávez</option>
                            <option value="3">Samuel Luzardo</option>
                            <option value="3">Zoe Luzardo</option>
                        </select>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <label for="especialidad" class="form-label mb-0">Especialidad</label>
                        <select class="form-select p-1" id="especialidad" aria-label="Default select example" onchange="" disabled>
                            <option value="1" selected>Medicina General</option>
                            <option value="2">Odontología</option>
                            <option value="3">Pediatría</option>
                        </select>
                    </div>
                    <div class="col-sm-12 mt-2">
                        <label for="medico" class="form-label mb-0">Médico</label>
                        <select class="form-select p-1" id="medico" aria-label="Default select example" onchange="">
                            <option value="1" selected>Dr. Juan Pérez</option>
                            <option value="2">Dr. Luis López</option>
                            <option value="3">Dr. Pedro Mero</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="fecha" class="form-label mb-0">Fecha</label>
                        <input type="text" class="form-control p-1" id="fecha" placeholder="" value="">
                    </div>
                    <div class="col-sm-6 mt-2">
                        <label for="hora" class="form-label mb-0">Hora</label>
                        <input type="text" class="form-control p-1" id="hora" placeholder="" value="">
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
