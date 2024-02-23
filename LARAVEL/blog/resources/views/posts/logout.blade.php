@extends('plantilla')

@section('titulo', 'Logout')

@section('contenido')
    <h1>Logout</h1>
    <form method="GET" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
