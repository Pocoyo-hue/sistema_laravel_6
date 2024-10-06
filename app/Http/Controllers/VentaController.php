<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta; // Asegúrate de tener el modelo Venta
use App\Models\DetalleVenta;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = DB::table('ventas')->get();
        
        return view('ventas.index',['ventas' => $ventas]);
    }

    public function create(Request $request)
    {   
        $productos = $request->input('productos');
        return view('ventas.create',['productos'=> $productos]);
    }

    public function store(Request $request)
    {
    
        $productos = $request->input('productos');
        $dni = $request->get('dniCliente');

        $cliente = DB::table('clientes')
        ->select('clientes.id')
        ->where('clientes.dniCliente',$dni)
        ->first();

        $total = 0;
        $ganancia = 0;

        foreach ($productos as $producto) {
            $precio = $producto['precio'];
            $cantidad = $producto['cantidad'];
            $ganancia += $producto['ganancia'];
            $total += $precio * $cantidad;
        }

        $igv = $total * 0.18;
        $date = Carbon::now();
        //$date = $date->format('d-m-Y');

        $venta = new Venta(Array(

            'idCliente' => $cliente->id,
            'subtotalVenta' => $total,
            'gananciasVenta' => $ganancia,
            'igvVenta' => $igv,
            'totalVenta' => $total + $igv,
            'fechaVenta' => $date
        ));

        $venta->save();

        foreach ($productos as $producto) {
            $detalle_venta = new DetalleVenta([
                'idVenta' => $venta->id,
                'idProducto' => $producto['id'],
                'cantidadDetalleVenta' => $producto['cantidad'],
                'subtotalDetalleVenta' => $producto['cantidad'] * $producto['precio'],
                'totalDetalleVenta' => $producto['cantidad'] * ($producto['precio'] + ($producto['precio'] * 0.18))
            ]);
        
            $detalle_venta->save();
        }

        return redirect()->route('venta_index');
    }

    public function show($id)
    {
        // Mostrar los detalles de una venta específica
        
        return view('ventas.show');
    }
}

