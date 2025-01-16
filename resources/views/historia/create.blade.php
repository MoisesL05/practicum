@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Creación de historia clínica')

@section('content')

<style>
    textarea {
       resize: none;
    }
</style>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row g-5">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3 mt-3">Crear nuevo registro de Historia Clínica</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3 mb-1">
                        <div class="col-sm-12 mt-2">
                            <label for="sintomas" class="form-label mb-0">Síntomas</label>
                            <textarea class="form-control" id="sintomas" style="height: 100px"></textarea>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <label for="diagnostico" class="form-label mb-0">Diagnóstico</label>
                            <textarea class="form-control" id="diagnostico" style="height: 100px"></textarea>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <label for="tratamiento" class="form-label mb-0">Tratamiento</label>
                            <textarea class="form-control" id="tratamiento" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button class="btn btn-success" type="submit">Guardar</button>
                        <a class="btn btn-secondary" type="button" href="{{ url('historia') }}">Volver</a>
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
