
@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
    <div class="container">
        <h1>En esta pagina podras ver a todos los productos</h1>

        @foreach ($productos as $pro)
        <table>
            <tr>
                <th>Imagen Producto</th>
                <th>Codigo Producto</th>
                <th>Nombre Producto</th>
                <th>Descripcion Producto</th>
                <th>Cantidad Producto</th>
                <th>Costo Producto</th>
                <th>Ganancia Producto</th>
                <th>Total Producto</th>
            </tr>
            <tr>
                <td><img src="{{$pro->imageProducto}}.jpg" alt="muestra" width="50px" height="50px”"></td>
                <td>{{$pro->codigoProducto}}</td>
                <td>{{$pro->nombreProducto}}</td>
                <td>{{$pro->descripcionProducto}}</td>
                <td>{{$pro->cantidadProducto}}</td>
                <td>{{$pro->costoProducto}}</td>
                <td>{{$pro->gananciaProducto}}</td>
                <td>{{$pro->precioProducto}}</td>
                <td><a href="{{route('producto_get',$pro->id)}}">EDITAR</a></td>
                <td><a href="{{route('delete_get',$pro->id)}}">BORRAR</a></td>
            </tr>
        </table>
        @endforeach

    </div>
@endsection