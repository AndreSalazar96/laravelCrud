@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
    <div class="card">
        <div class="card-header">
            CRUD con laravel y Msql
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">

                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif

                </div>
            </div>
            <h5 class="card-title text-center">Listado de personas</h5>
            <p>
                <a href={{ route('personas.create') }} class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar nueva persona
                </a>
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
                                <td>
                                    <form action="">
                                        <button class="btn btn-warning btn-sm"><span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="">
                                        <button class="btn btn-danger btn-sm"><span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>

        </div>
    </div>


@endsection
