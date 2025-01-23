@extends( auth()->user()->tipo==1 ? 'layouts.medico' : (auth()->user()->tipo==2 ? 'layouts.operador' : 'layouts.paciente'))

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
                {{-- <form action="{{ route('patients.update', $patient->id) }}" method="POST"> --}}
                <form action="{{route('usuario.update', $usuario->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3 mb-1">
                        <div class="col-sm-6 mt-2">
                            <label for="nombre" class="form-label mb-0">Nombre</label>
                            <input type="text" class="form-control p-1" id="nombre" name="nombre" placeholder="" value="{{$usuario->nombre}}" required>
                            <div class="invalid-feedback">
                                Se necesita nombre
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="apellido" class="form-label mb-0">Apellido</label>
                            <input type="text" class="form-control p-1" id="apellido" name="apellido" placeholder="" value="{{$usuario->apellido}}" required>
                            <div class="invalid-feedback">
                                Se necesita apellido
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="email" class="form-label mb-0">Correo Electrónico</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control p-1" id="email" name="email" value="{{$usuario->correo}}" required>
                                <div class="invalid-feedback">
                                    Se necesita correo electrónico
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="password" class="form-label mb-0">Contraseña</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control p-1" id="password" name="password" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <label for="cedula" class="form-label mb-0">Cédula</label>
                            <input type="text" class="form-control p-1" id="cedula" name="cedula" placeholder="" value="{{$usuario->cedula}}" required>
                            <div class="invalid-feedback">
                                Se necesita cédula
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <input type="hidden" id="tipoH" name="tipoH" value="{{$usuario->tipo}}">
                            <label for="tipo" class="form-label mb-0">Tipo de Usuario</label>
                            <select class="form-select p-1" id="tipo" name="tipo" aria-label="Default select example" onchange="cambioTipo(this.value);" disabled>
                                @if ($usuario->tipo==1)
                                    <option value="1" selected>Médico</option>
                                    <option value="2">Operador</option>
                                    <option value="3">Paciente</option>
                                @elseif ($usuario->tipo==2)
                                    <option value="1">Médico</option>
                                    <option value="2" selected>Operador</option>
                                    <option value="3">Paciente</option>
                                @else
                                    <option value="1">Médico</option>
                                    <option value="2">Operador</option>
                                    <option value="3" selected>Paciente</option>
                                @endif
                            </select>
                        </div>
                        <div class="row g-3 mb-1" id="tipoMedico">
                            <div class="col-sm-6 mt-2">
                                <label for="medCelular" class="form-label mb-0">Celular</label>
                                @if ($usuario->tipo==1)
                                    <input type="text" class="form-control p-1" id="medCelular" name="medCelular" placeholder="" value="{{ $usuario->medico->celular }}">
                                @else
                                    <input type="text" class="form-control p-1" id="medCelular" name="medCelular" placeholder="" value="">
                                @endif
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="medEspecialidad" class="form-label mb-0">Especialidad</label>
                                @if ($usuario->tipo==1)
                                    <input type="text" class="form-control p-1" id="medEspecialidad" name="medEspecialidad" value="{{ $usuario->medico->especialidad }}">
                                @else
                                    <input type="text" class="form-control p-1" id="medEspecialidad" name="medEspecialidad" value="">
                                @endif
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="medDireccion" class="form-label mb-0">Dirección Consultorio</label>
                                @if ($usuario->tipo==1)
                                    <input type="text" class="form-control p-1" id="medDireccion" name="medDireccion" value="{{$usuario->medico->direccionConsultorio }}">
                                @else
                                    <input type="text" class="form-control p-1" id="medDireccion" name="medDireccion" value="">
                                @endif
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="medTelefono" class="form-label mb-0">Teléfono Consultorio</label>
                                @if ($usuario->tipo==1)
                                    <input type="text" class="form-control p-1" id="medTelefono" name="medTelefono" value="{{$usuario->medico->telefonoConsultorio }}">
                                @else
                                    <input type="text" class="form-control p-1" id="medTelefono" name="medTelefono" value="">
                                @endif
                            </div>
                        </div>
                        <div class="row g-3 mb-1" id="tipoOperador">
                            <div class="col-sm-6 mt-2">
                                <label for="opeCargo" class="form-label mb-0">Cargo</label>
                                @if ($usuario->tipo==2)
                                    <input type="text" class="form-control p-1" id="opeCargo" name="opeCargo" placeholder="" value="{{ $usuario->operador->cargo }}">
                                @else
                                    <input type="text" class="form-control p-1" id="opeCargo" name="opeCargo" placeholder="" value="">
                                @endif
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="opeDepartamento" class="form-label mb-0">Departamento</label>
                                @if ($usuario->tipo==2)
                                    <input type="text" class="form-control p-1" id="opeDepartamento" name="opeDepartamento" value="{{ $usuario->operador->departamento }}">
                                @else
                                    <input type="text" class="form-control p-1" id="opeDepartamento" name="opeDepartamento" value="">
                                @endif
                            </div>
                        </div>
                        <div class="row g-3 mb-1" id="tipoPaciente">
                            <div class="col-sm-6 mt-2">
                                <label for="pacCelular" class="form-label mb-0">Celular</label>
                                @if ($usuario->tipo==3)
                                    <input type="text" class="form-control p-1" id="pacCelular" name="pacCelular" placeholder="" value="{{ $usuario->paciente->celular }}">
                                @else
                                    <input type="text" class="form-control p-1" id="pacCelular" name="pacCelular" placeholder="" value="">
                                @endif
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="pacDireccion" class="form-label mb-0">Dirección</label>
                                @if ($usuario->tipo==3)
                                    <input type="text" class="form-control p-1" id="pacDireccion" name="pacDireccion" value="{{ $usuario->paciente->direccion }}">
                                @else
                                    <input type="text" class="form-control p-1" id="pacDireccion" name="pacDireccion">
                                @endif
                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="pacContacto" class="form-label mb-0">Contacto de Emergencia</label>
                                @if ($usuario->tipo==3)
                                    <input type="text" class="form-control p-1" id="pacContacto" name="pacContacto" value="{{ $usuario->paciente->contactoEmergencia }}">
                                @else
                                    <input type="text" class="form-control p-1" id="pacContacto" name="pacContacto">
                                @endif

                            </div>
                            <div class="col-sm-6 mt-2">
                                <label for="pacCelContacto" class="form-label mb-0">Celular de contacto</label>
                                @if ($usuario->tipo==3)
                                    <input type="text" class="form-control p-1" id="pacCelContacto" name="pacCelContacto" value="{{ $usuario->paciente->celularContactoEmergencia }}">
                                @else
                                    <input type="text" class="form-control p-1" id="pacCelContacto" name="pacCelContacto">
                                @endif
                            </div>
                        </div>
                        @if ($usuario->tipo==1)
                            <script>
                                console.log("1")
                                $("#tipoMedico").removeClass("visually-hidden")
                                $("#tipoOperador").addClass("visually-hidden")
                                $("#tipoPaciente").addClass("visually-hidden")
                            </script>
                        @elseif ($usuario->tipo==2)
                            <script>
                                console.log("2")
                                $("#tipoMedico").addClass("visually-hidden");
                                $("#tipoOperador").removeClass("visually-hidden");
                                $("#tipoPaciente").addClass("visually-hidden");
                            </script>
                        @else
                            <script>
                                console.log("3")
                                $("#tipoMedico").addClass("visually-hidden");
                                $("#tipoOperador").addClass("visually-hidden");
                                $("#tipoPaciente").removeClass("visually-hidden");
                            </script>
                        @endif
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
