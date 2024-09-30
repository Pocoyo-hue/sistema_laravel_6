
@extends('layouts.plantilla')

@section('title','Proveedor')

@section('content')

    @php
        $proveedor = session('proveedor'); // Acceder al proveedor desde la sesión
    @endphp
    <div class="container">
        <h1>En esta pagina podras crear un nuevo proveedor</h1>
        <form action="{{route('proveedor_delete',$proveedor->id)}}" method="post">

            {{csrf_field()}}
            @method('DELETE')

                <label for="razonSocial">Razon Social:</label>
                <input type="text" id="razon_social" name="razonSocial" maxlength="50" value="{{$proveedor->razonSocial}}" disabled>
           
                <label for="RUC">RUC:</label>
                <input type="text" id="rucProveedor" name="rucProveedor" maxlength="11" value="{{$proveedor->rucProveedor}}" disabled>

                <label for="direccionProveedor">Direccion del Proveedor:</label>
                <input type="text" id="direccionProveedor" name="direccionProveedor" maxlength="150" value="{{$proveedor->direccionProveedor}}" disabled>

                <label for="telefonoProveedor">Teléfono:</label>
                <input type="text" id="telefonoProveedor" name="telefonoProveedor" pattern="[0-9]*" maxlength="9" value="{{$proveedor->telefonoProveedor}}" disabled>

                <label for="correoProveedor">Correo Electrónico:</label>
                <input type="email" id="correoProveedor" name="correoProveedor" maxlength="50" value="{{$proveedor->correoProveedor}}" disabled>

            <button type="submit">Eliminar Proveedor</button>
        </form>
    </div>
@endsection