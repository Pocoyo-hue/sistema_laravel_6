
@extends('layouts.plantilla')

@section('title','Venta')

@section('content')
    <div class="container">
        <h1>En esta pagina podras crear una venta</h1>
        <form action="{{ route('venta_store') }}" method="post">

            {{csrf_field()}}
                <div class="venta">
                    <div>
                        <label for="">DNI Cliente:</label>
                        <input type="text"  name="dniCliente" pattern="[0-9]*" maxlength="8" required>
                
                        <!-- <label for="RUC">Apellidos Cliente:</label>
                        <input type="text"  name="apellidosCliente" maxlength="50" required>

                        <label for="telefonoProveedor">DNI Cliente:</label>
                        <input type="text"  name="dniCliente" pattern="[0-9]*" maxlength="8" required>

                        <label for="direccionProveedor">Direccion del Cliente:</label>
                        <input type="text"  name="direccionCliente" maxlength="150" required>

                        <label for="telefonoProveedor">Teléfono:</label>
                        <input type="text"  name="telefonoCliente" pattern="[0-9]*" maxlength="9" required>

                        <label for="correoProveedor">Correo Electrónico:</label>
                        <input type="email"  name="correoCliente" maxlength="50" required> -->
                    </div>
                    <div>
                        @foreach ($productos as $id => $detalles)
                            <label>Nombre del Producto:</label>
                            <input type="text" name="" value="{{ $detalles['nombre'] }}" disabled>

                            <label>Codigo del Producto:</label>
                            <input type="text" name="" value="{{ $detalles['codigo'] }}" disabled>

                            <label>Descripcion del Producto:</label>
                            <input type="text" name="" value="{{ $detalles['precio'] }}" disabled>

                            <label>Cantidad del Producto:</label>
                            <input type="number" name="" value="{{ $detalles['cantidad'] }}" disabled>

                            <label>Subtotal:</label>
                            <input type="number"  name="" value="{{ $detalles['precio'] * $detalles['cantidad'] }}" disabled>
                            <hr>
                        @endforeach
                        @foreach($productos as $id => $detalles)
                            <input type="hidden" name="productos[{{ $id }}][id]" value="{{$detalles['id']}}">
                            <input type="hidden" name="productos[{{ $id }}][cantidad]" value="{{ $detalles['cantidad'] }}">
                            <input type="hidden" name="productos[{{ $id }}][nombre]" value="{{ $detalles['nombre'] }}">
                            <input type="hidden" name="productos[{{ $id }}][codigo]" value="{{ $detalles['codigo'] }}">
                            <input type="hidden" name="productos[{{ $id }}][precio]" value="{{ $detalles['precio'] }}">
                            <input type="hidden" name="productos[{{ $id }}][ganancia]" value="{{ $detalles['ganancia']*$detalles['cantidad'] }}">
                        @endforeach
                    </div>
                </div>
            <button type="submit">Crear Venta</button>
        </form>
    </div>
@endsection