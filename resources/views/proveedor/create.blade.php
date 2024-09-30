
@extends('layouts.plantilla')

@section('title','Proveedor')

@section('content')
    <div class="container">
        <h1>En esta pagina podras crear un nuevo proveedor</h1>
        <form action="{{ route('proveedor_store') }}" method="post">

            {{csrf_field()}}

                <label for="razonSocial">Razon Social:</label>
                <input type="text" id="razon_social" name="razonSocial" maxlength="50" required>
           
                <label for="RUC">RUC:</label>
                <input type="text" id="rucProveedor" name="rucProveedor" maxlength="11" required>

                <label for="direccionProveedor">Direccion del Proveedor:</label>
                <input type="text" id="direccionProveedor" name="direccionProveedor" maxlength="150" required>

                <label for="telefonoProveedor">Teléfono:</label>
                <input type="text" id="telefonoProveedor" name="telefonoProveedor" pattern="[0-9]*" maxlength="9" required>

                <label for="correoProveedor">Correo Electrónico:</label>
                <input type="email" id="correoProveedor" name="correoProveedor" maxlength="50" required>

            <button type="submit">Crear Proveedor</button>
        </form>
    </div>
@endsection