
@extends('layouts.plantilla')

@section('title','Proveedor')

@section('content')

    @php
        $producto = session('producto'); // Acceder al producto desde la sesión
    @endphp
    <div class="container">
        <h1>En esta pagina podras editar un producto</h1>
        <form action="{{route('producto_update',$producto->id)}}" method="post">

            {{csrf_field()}}
            @method('PUT')

                <label for="">Imagen Producto:</label>
                <input type="text" name="imageProducto" maxlength="50" value="{{$producto->imageProducto}}" required>
           
                <label for="">Codigo Producto:</label>
                <input type="text" name="codigoProducto" maxlength="11" value="{{$producto->codigoProducto}}" pattern="[0-9]*" maxlength="12" required>

                <label for="">Nombre Producto:</label>
                <input type="text" name="nombreProducto" maxlength="150" value="{{$producto->nombreProducto}}" required>

                <label for="">Descripcion Producto:</label>
                <input type="text" name="descripcionProducto" value="{{$producto->descripcionProducto}}" required>

                <label for="">Stock de Producto:</label>
                <input type="number" name="cantidadProducto"  value="{{$producto->cantidadProducto}}" min="1" required>

                <label for="">Costo Producto:</label>
                <input type="number" step="0.01" name="costoProducto"  value="{{$producto->costoProducto}}" required>

                <label for="">Ganancia Producto:</label>
                <input type="number" step="0.01" name="gananciaProducto"  value="{{$producto->gananciaProducto}}" required>

            <button type="submit">Editar Producto</button>
        </form>
    </div>
@endsection