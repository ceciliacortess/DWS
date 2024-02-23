@extends('plantilla')

@section('titulo', 'Login')

@section('contenido')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
@endsection
