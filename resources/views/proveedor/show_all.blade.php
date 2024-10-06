
@extends('layouts.plantilla')

@section('title','Proveedores')

@section('content')
    <div class="container">
        <h1>En esta pagina podras ver a todos los proveedores</h1>

        @foreach ($proveedores as $prov)
        <table>
            <tr>
                <th>Razon Social</th>
                <th>RUC</th>
                <th>Direccion Proveedor</th>
                <th>Telefono Proveedor</th>
                <th>Correo Proveedor</th>
            </tr>
            <tr>
                <td>{{$prov->razonSocial}}</td>
                <td>{{$prov->rucProveedor}}</td>
                <td>{{$prov->direccionProveedor}}</td>
                <td>{{$prov->telefonoProveedor}}</td>
                <td>{{$prov->correoProveedor}}</td>
                <td><a href="{{route('proveedor_get2',$prov->id)}}">EDITAR</a></td>
                <td><a href="{{route('delete_get',$prov->id)}}">BORRAR</a></td>
            </tr>
        </table>
        @endforeach
        <button><a href="{{ route('proveedor_index') }}">Volver Inicio Proveedor</a></button>
    </div>
@endsection