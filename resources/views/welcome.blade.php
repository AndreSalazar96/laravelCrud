@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
    <br><br>
    <div class="card">
        <div class="card-header">
            CRUD con laravel y Msql
        </div>
        <div class="card-body">
            <h5 class="card-title">Listado de personas</h5>
            <p>
                <a href={{ route('personas.create') }} class="btn btn-primary">Agregar nueva persona</a>
            </p>
            <hr>
            @php
            @endphp
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre</th>
                        <th>Fecha nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td><a href="" class="btn btn-warning">Editar</a></td>
                                <td><a href="" class="btn btn-danger">Eliminar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>

        </div>
    </div>


@endsection
