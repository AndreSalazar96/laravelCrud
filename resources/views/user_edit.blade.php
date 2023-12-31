@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Actualizar nueva persona
        </div>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('user.update', $users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="paterno">Modifica tu nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $users->name }}">

                <label for="materno">Modifica tu correo</label>
                <input type="text" name="email" class="form-control" value="{{ $users->email }}">

                <label for="formFile" class="form-label">Cambia tu avatar de usuario</label>
                <br>
                <img src="http://localhost/laravelCrud/public/{{ $users->avatar }}" alt="{{ $users->avatar }}">
                <br>
                <input class="form-control" type="file" id="formFile" name="avatar">

                <br>

                <a href="{{ route('user.index') }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar al perfil
                </a>

                <button class="btn btn-primary"><span class="fas fa-user-edit"></span> Actualizar</button>
            </form>
            </p>
        </div>
    </div>
@endsection
