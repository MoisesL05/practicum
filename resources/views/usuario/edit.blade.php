@extends( config('logging.user_type')==1 ? 'layouts.medico' : (config('logging.user_type')==2 ? 'layouts.operador' : 'layouts.paciente'))

@section('title', 'Creación de usuario')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function cambioTipo(tip) {
        if (tip==1) {
            $("#tipoMedico").removeClass("visually-hidden");
            $("#tipoOperador").addClass("visually-hidden");
            $("#tipoPaciente").addClass("visually-hidden");
        } else if (tip==2) {
            $("#tipoMedico").addClass("visually-hidden");
            $("#tipoOperador").removeClass("visually-hidden");
            $("#tipoPaciente").addClass("visually-hidden");
        } else {
            $("#tipoMedico").addClass("visually-hidden");
            $("#tipoOperador").addClass("visually-hidden");
            $("#tipoPaciente").removeClass("visually-hidden");
        }
    }
</script>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row g-5">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3 mt-3">Actualizar usuario</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3 mb-1">
                        <div class="col-sm-6 mt-2">
                            <label for="nombre" class="form-label mb-0">Nombre</label>
                            <input type="text" class="form-control p-1" id="nombre" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Se necesita nombre
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="apellido" class="form-label mb-0">Apellido</label>
                            <input type="text" class="form-control p-1" id="apellido" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Se necesita apellido
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="email" class="form-label mb-0">Correo Electrónico</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control p-1" id="email" required>
                                <div class="invalid-feedback">
                                    Se necesita correo electrónico
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="password" class="form-label mb-0">Contraseña</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control p-1" id="password" required>
                                <div class="invalid-feedback">
                                    Se necesita contraseña
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="cedula" class="form-label mb-0">Cédula</label>
                            <input type="text" class="form-control p-1" id="cedula" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Se necesita cédula
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="direccion" class="form-label mb-0">Dirección</label>
                            <input type="text" class="form-control p-1" id="address" required>
                            <div class="invalid-feedback">
                                Se necesita dirección
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="tipo" class="form-label mb-0">Tipo de Usuario</label>
                            <select class="form-select p-1" id="tipo" aria-label="Default select example" onchange="cambioTipo(this.value);">
                                <option value="1">Médico</option>
                                <option value="2" selected>Operador</option>
                                <option value="3">Paciente</option>
                            </select>
                        </div>
                        <div class="row g-3 mb-1 visually-hidden" id="tipoMedico">
                            <div class="col-sm-6 mt-2">
                                <label for="medCelular" class="form-label mb-0">Celular</label>
                                <input type="text" class="form-control p-1" id="medCelular" placeholder="" value="">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="medEspecialidad" class="form-label mb-0">Especialidad</label>
                                <input type="text" class="form-control p-1" id="medEspecialidad">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="medDireccion" class="form-label mb-0">Dirección Consultorio</label>
                                <input type="text" class="form-control p-1" id="medDireccion">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="medTelefono" class="form-label mb-0">Teléfono Consultorio</label>
                                <input type="text" class="form-control p-1" id="medTelefono">
                            </div>
                        </div>
                        <div class="row g-3 mb-1" id="tipoOperador">
                            <div class="col-sm-6 mt-2">
                                <label for="opeCargo" class="form-label mb-0">Cargo</label>
                                <input type="text" class="form-control p-1" id="opeCargo" placeholder="" value="">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="opeDepartamento" class="form-label mb-0">Departamento</label>
                                <input type="text" class="form-control p-1" id="opeDepartamento">
                            </div>
                        </div>
                        <div class="row g-3 mb-1 visually-hidden" id="tipoPaciente">
                            <div class="col-sm-6 mt-2">
                                <label for="pacCelular" class="form-label mb-0">Celular</label>
                                <input type="text" class="form-control p-1" id="pacCelular" placeholder="" value="">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="pacDireccion" class="form-label mb-0">Dirección</label>
                                <input type="text" class="form-control p-1" id="pacDireccion">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="pacContacto" class="form-label mb-0">Contacto de Emergencia</label>
                                <input type="text" class="form-control p-1" id="pacContacto">
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="pacCelContacto" class="form-label mb-0">Celular de contacto</label>
                                <input type="text" class="form-control p-1" id="pacCelContacto">
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-success" type="submit">Guardar</button>
                        <a class="btn btn-secondary" type="button" href="{{ url('usuario') }}">Volver</a>
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
