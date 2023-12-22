@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="container">
        <div class="row col-md-12">
            <div class="row col-md-6 p-5">
                @if ($mensaje = Session::get('refused'))
                    <div class="alert alert-danger" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif
{{-- 
                @dump($errors->all()) --}}

                <form method="POST" action="{{ route('inicia-sesion') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                            placeholder="Ingresar email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <small class="errorMessage" id="emailError">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1">Password</label>
                        <input type="password" class="form-control" id="inputPassword1" placeholder="Contraseña"
                            name="password" value="{{ old('password') }}">
                        @error('password')
                            <small class="errorMessage" id="passwordError">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Acceder</button>
                    <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
                </form>
            </div>
            <div class="row col-md-6 p-5" style="background-color: blueviolet"></div>

        </div>
    </div>
@endsection
