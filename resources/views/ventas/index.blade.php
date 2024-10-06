
@extends('layouts.plantilla')

@section('title','Ventas')

@section('content')
    <div class="container">
        <h1>En esta pagina podras ver a todos las ventas</h1>

        <table>
                <tr>
                    <th>Fecha venta</th>
                    <th>Subtotal Venta</th>
                    <th>Ganancias Venta</th>
                    <th>IGV Venta</th>
                    <th>Total Venta</th>
                </tr>
                @foreach ($ventas as $venta)
                    <tr>
                        <td>{{ $venta->fechaVenta }}</td>
                        <td>{{ $venta->subtotalVenta }}</td>
                        <td>{{ $venta->gananciasVenta }}</td>
                        <td>{{ $venta->igvVenta }}</td>
                        <td>{{ $venta->totalVenta }}</td>
                    </tr>
                @endforeach
            </table>
    </div>
@endsection
