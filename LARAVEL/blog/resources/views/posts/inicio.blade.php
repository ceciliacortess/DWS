@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Página de inicio</h1>
    <p>Bienvenido a mi blog</p>
    <span>{{ $fechaActual }}</span>
@endsection
