
@extends('layouts.plantilla')

@section('title','Proveedor')
@if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif
@section('content')
    <div class="container">
        <h1>Bienvenido a la pagina de proveedores</h1>
        <h2>Gestión de Proveedores</h2>

            <button><a href="{{ route('search_proveedor') }}">Buscar Proveedor</a></button>
            <button><a href="{{ route('show_proveedor_all') }}">Listar Proveedores</a></button>
            <button><a href="{{ route('proveedor_create') }}">Crear Proveedor</a></button>
            <button><a href="{{ route('search_edit') }}">Editar Proveedor</a></button>
            
    </div>
@endsection