
@extends('layouts.plantilla')

@section('title','Estudiante ' .$proveedor->rucProveedor)

@section('content')
    <div class="container">
        <h1>En esta pagina podras ver al estudiante</h1>

        <table>
        <tr>
                    <th>Razon Social</th>
                    <th>RUC</th>
                    <th>Direccion Proveedor</th>
                    <th>Telefono Proveedor</th>
                    <th>Correo Proveedor</th>
                </tr>
                <tr>
                    <td>{{$proveedor->razonSocial}}</td>
                    <td>{{$proveedor->rucProveedor}}</td>
                    <td>{{$proveedor->direccionProveedor}}</td>
                    <td>{{$proveedor->telefonoProveedor}}</td>
                    <td>{{$proveedor->correoProveedor}}</td>
                </tr>
        </table>
        <button><a href="{{ route('proveedor_index') }}">Volver Inicio Estudiante</a></button>
    </div>
@endsection