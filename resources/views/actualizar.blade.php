@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Actualizar nueva persona
        </div>
        <div class="card-body">
            <p class="card-text">
                <form action="">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" name="paterno" class="form-control" required>

                    <label for="materno">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" required>

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>

                    <label for="fecha_nacimiento">Fecha Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>

                    <br>

                    <a href="{{ route('personas.index') }}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-primary">Actualizar</button>
                </form>
            </p>
        </div>
    </div>
@endsection
