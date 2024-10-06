
@extends('layouts.plantilla')

@section('title','Cliente')

@section('content')
    <div class="container">
        <h1>En esta pagina podras crear un cliente</h1>
        <form action="{{ route('cliente_store') }}" method="post">

            {{csrf_field()}}

                <label for="">Nombre Cliente:</label>
                <input type="text"  name="nombreCliente" maxlength="50" required>
           
                <label for="RUC">Apellidos Cliente:</label>
                <input type="text"  name="apellidosCliente" maxlength="50" required>

                <label for="telefonoProveedor">DNI Cliente:</label>
                <input type="text"  name="dniCliente" pattern="[0-9]*" maxlength="8" required>

                <label for="direccionProveedor">Direccion del Cliente:</label>
                <input type="text"  name="direccionCliente" maxlength="150" required>

                <label for="telefonoProveedor">Teléfono:</label>
                <input type="text"  name="telefonoCliente" pattern="[0-9]*" maxlength="9" required>

                <label for="correoProveedor">Correo Electrónico:</label>
                <input type="email"  name="correoCliente" maxlength="50" required>

            <button type="submit">Crear Cliente</button>
        </form>
    </div>
@endsection