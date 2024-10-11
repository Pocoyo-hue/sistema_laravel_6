
@extends('layouts.plantilla')

@section('title','SOCIO CONSTRUCTOR - Sistema de Ventas y Almacén')
@if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif
@section('content')
    <div class="container">
        <h1>Bienvenido a la pagina de Inicio</h1>
        <img src="{{ asset('images/footer.jpg') }}" alt="muestra" width="1000px" height="1000px">
            
    </div>
@endsection