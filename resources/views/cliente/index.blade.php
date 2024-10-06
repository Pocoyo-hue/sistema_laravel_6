
@extends('layouts.plantilla')

@section('title','Cliente')

@section('content')
    <div class="container">
        <h1>En esta pagina podras ver a todos los proveedores</h1>

        @foreach ($clientes as $cliente)
        <table>
            <tr>
                <th>Nombre Cliente</th>
                <th>Apellidos Cliente</th>
                <th>DNI Cliente</th>
                <th>Direccion Cliente</th>
                <th>Telefono Cliente</th>
                <th>Correo Cliente</th>
            </tr>
            <tr>
                <td>{{$cliente->nombreCliente}}</td>
                <td>{{$cliente->apellidosCliente}}</td>
                <td>{{$cliente->dniCliente}}</td>
                <td>{{$cliente->direccionCliente}}</td>
                <td>{{$cliente->telefonoCliente}}</td>
                <td>{{$cliente->correoCliente}}</td>
                <td><a href="{{route('proveedor_get2',$cliente->id)}}">EDITAR</a></td>
            </tr>
        </table>
        @endforeach
        <button><a href="{{ route('proveedor_index') }}">Volver Inicio Proveedor</a></button>
    </div>
@endsection