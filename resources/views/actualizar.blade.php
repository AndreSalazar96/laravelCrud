@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Actualizar nueva persona
        </div>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="paterno">Apellido Paterno</label>
                <input type="text" name="paterno" class="form-control" required value="{{ $personas->paterno }}">

                <label for="materno">Apellido Materno</label>
                <input type="text" name="materno" class="form-control" required value="{{ $personas->materno }}">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre }}">

                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required
                    value="{{ $personas->fecha_nacimiento }}">

                <label for="nombre">Estado Civil</label>
                <select name="id_edo_civil" class="form-control" require>
                    @foreach ($edo_civil_select as $item)
                        <option value="{{ $item->id_edo_civil }}">{{ $item->edo_civil }}</option>
                    @endforeach
                </select>
                <br>

                <a href="{{ route('personas.index') }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary"><span class="fas fa-user-edit"></span> Actualizar</button>
            </form>
            </p>
        </div>
    </div>
@endsection
