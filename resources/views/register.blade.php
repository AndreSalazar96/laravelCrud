@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="container">
        <div class="row col-md-12">
            <div class="row col-md-6 p-5">
                <form method="POST" action="{{ route('validar-registro') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" id="exampleInpuNombre" placeholder="Nombre" name="name" value="{{ old('name') }}">
                        @error('name')
                            <small class="errorMessage" id="nameError" >{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <small class="errorMessage" id="emailError" >{{ $message }} <a href="{{ route('login') }}">inicia sesión</a></small> 
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password" value="{{ old('password') }}">
                        @error('password')
                            <small class="errorMessage" id="passwordError" >{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Registrarse</button>
                    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">inicia sesión</a></p>
                </form>
            </div>
            <div class="row col-md-6 p-5" style="background-color: blueviolet"></div>

        </div>
    </div>
@endsection
