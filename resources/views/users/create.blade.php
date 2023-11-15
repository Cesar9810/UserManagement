@extends('layout')

@section('title', "Crear Usuario")

@section('content')
    <h1>Crear Usuario</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <h6>Por favor corrige los errores de abajo</h6>
        
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('usuarios') }}">
        {!! csrf_field() !!}

        <label for="name">Nombre: </label> 
        <input type="text" name="name" id='name' placeholder="Cesar Augusto">
        <br>       
        <label for="email">Correo electronico: </label> 
        <input type="email" name="email" id='email' placeholder="CesarAug@gmail.com" value="{{ old('email') }}">
        <br>
        <label for="password">Contraseña: </label> 
        <input type="password" name="password" id='password' placeholder="Mayor a 6 caracteres">
        <br>
        <button type="submit">Crear usuario</button>
    </form>
   
    <p>
        <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
    </p>

@endsection