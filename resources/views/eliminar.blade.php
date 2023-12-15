@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Eliminar una persona
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¿Estas seguro de eliminar este registro?

                <table class="table table-sm table-hover">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="">
                    <a href="{{ route('personas.index') }}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </div>
            </p>
        </div>
    </div>
@endsection
