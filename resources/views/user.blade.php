@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ URL::asset('img/cabecera.png') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">@auth {{ Auth::user()->name }} @endauth
            </h5>
            <p class="card-text">@auth {{ Auth::user()->email }} @endauth
            </p>

            <div class="row">
                <a href="{{ route('personas.index') }}" class="btn btn-primary col-md-12 ">Lista de personas</a>
                <a href="{{ route('personas.create') }}" class="btn btn-primary col-md-12 mt-1">Agregar Personas</a>
                <a href="{{ route('logout') }}" class="btn col-md-12 btn-secondary mt-1">Cerrar sesión</a>
            </div>
        </div>
    </div>
@endsection
