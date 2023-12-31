@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="container">
        <div class="row">
            <h1 class="titleWelcome">Bienvenid@ @auth {{ Auth::user()->name }} @endauth
            </h1>
        </div>
    </div>
    @if ($mensaje = Session::get('successUser'))
        <div class="alert alert-success" role="alert">
            {{ $mensaje }}
        </div>
    @endif
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="@auth {{ Auth::user()->avatar }} @endauth"
            alt="@auth {{ Auth::user()->avatar }} @endauth">
        <div class="card-body">
            <h5 class="card-title">@auth {{ Auth::user()->name }} @endauth
            </h5>
            <p class="card-text">@auth {{ Auth::user()->email }} @endauth
            </p>

            <div class="row">
                <a href="{{ route('personas.index') }}" class="btn btn-primary col-md-12 ">Lista de personas</a>
                <a href="{{ route('personas.create') }}" class="btn btn-primary col-md-12 mt-1">Agregar Personas</a>

                <form action="{{ route('user.edit', Auth::user()->id) }}" method="GET" class="p-0 m-0">
                    <button class="btn btn-warning col-md-12 mt-1">Editar perfil
                    </button>
                </form>

                <a href="{{ route('logout') }}" class="btn col-md-12 btn-secondary mt-1">Cerrar sesión</a>
            </div>
        </div>
    </div>
@endsection
