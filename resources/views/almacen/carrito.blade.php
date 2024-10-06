
@extends('layouts.plantilla')

@section('title','Carrito de Compras')

@section('content')
    <h1>Carrito de compras</h1>

    @if(session('carrito'))
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('carrito') as $id => $detalles)
                    <tr>
                        <td>{{ $detalles['nombre'] }}</td>
                        <td>{{ $detalles['cantidad'] }}</td>
                        <td>{{ $detalles['precio'] }} </td>
                        <td>{{ $detalles['cantidad'] * $detalles['precio'] }} </td>
                        <td>
                            <form action="{{ route('quitar_carro', $id) }}" method="POST">
                                @csrf
                                <button type="submit">Quitar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h4>IGV: 
            {{ array_sum(array_map(function($detalles) {
                return ($detalles['cantidad'] * $detalles['precio'])*0.18;
            }, session('carrito'))) }}
        </h4>
        <h4>Total: 
            {{ array_sum(array_map(function($detalles) {
                return ($detalles['cantidad'] * $detalles['precio'])+($detalles['cantidad'] * $detalles['precio'])*0.18;
            }, session('carrito'))) }}
        </h4>
        
        <form action="{{route('venta_create')}}" method="get">
            @csrf
            @foreach(session('carrito') as $id => $detalles)
                <input type="hidden" name="productos[{{ $id }}][id]" value="{{ $id }}">
                <input type="hidden" name="productos[{{ $id }}][cantidad]" value="{{ $detalles['cantidad'] }}">
                <input type="hidden" name="productos[{{ $id }}][nombre]" value="{{ $detalles['nombre'] }}">
                <input type="hidden" name="productos[{{ $id }}][codigo]" value="{{ $detalles['codigo'] }}">
                <input type="hidden" name="productos[{{ $id }}][precio]" value="{{ $detalles['precio'] }}">
                <input type="hidden" name="productos[{{ $id }}][ganancia]" value="{{ $detalles['ganancia']*$detalles['cantidad'] }}">
            @endforeach
            <button type="submit">Realizar Venta</button>
        </form>

    @else
        <p>Tu carrito está vacío.</p>
    @endif
@endsection