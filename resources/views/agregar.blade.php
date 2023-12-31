@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Agregar nueva persona
        </div>
        <div class="card-body">
            <p class="card-text">
            <form action="{{ route('personas.store') }}" method="POST">
                @csrf
                <label for="paterno">Apellido Paterno</label>
                <input type="text" name="paterno" class="form-control" required>

                <label for="materno">Apellido Materno</label>
                <input type="text" name="materno" class="form-control" required>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>

                <label for="fecha_nacimiento">Fecha Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>

                <label for="nombre">Estado Civil</label>
                <select name="id_edo_civil"  class="form-control" require>
                    @foreach ($datos as $item)
                        <option value="{{ $item->id_edo_civil }}">{{ $item->edo_civil }}</option>
                    @endforeach         
                </select>

                <br>

                <a href="{{ route('personas.index') }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar</button>
            </form>
            </p>
        </div>
    </div>
@endsection
