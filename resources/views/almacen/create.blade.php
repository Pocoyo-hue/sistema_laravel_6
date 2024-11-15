
@extends('layouts.plantilla')

@section('title','Proveedor')

@section('content')
<div class="container">
        <h1>Agregar Nuevo Producto</h1>
        <form action="{{route('producto_store')}}" method="POST">

            {{csrf_field()}}

            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombreProducto" name="nombreProducto" required>

            <label for="codigo">Codigo del Producto:</label>
            <input type="text" id="codigoProducto" name="codigoProducto" pattern="[0-9]*" maxlength="12" required>

            <label for="descripcion">Descripcion del Producto:</label>
            <input type="text" id="descripcionProducto" name="descripcionProducto" required>

            <label for="stock">Stock del Producto:</label>
            <input type="number" id="cantidadProducto" name="cantidadProducto" min="1" required>

            <label for="costo">Costo:</label>
            <input type="number" step="0.01" id="costoProducto" name="costoProducto" required>

            <label for="costo">Ganancia:</label>
            <input type="number" step="0.01" id="gananciaProducto" name="gananciaProducto" required>

            <label for="image">Imagen del Producto:</label>
            <input type="text" id="imageProducto" name="imageProducto" required>

            <label for="proveedor">Seleccionar Proveedor:</label>
            <input list="proveedores" id="proveedor" name="idProveedor" placeholder="seleccione un proveedor" required>

            <datalist id="proveedores">
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->razonSocial }}</option>
                @endforeach
            </datalist>

            <button type="submit">Agregar Producto</button>
        </form>
    </div>


    
@endsection