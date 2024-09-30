<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta; // Asegúrate de tener el modelo Venta

class VentaController extends Controller
{
    public function index()
    {
        // Obtener todas las ventas y pasar a la vista
        
        return view('ventas.index');
    }

    public function create()
    {
        // Mostrar el formulario para crear una nueva venta
        return view('ventas.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar una nueva venta

        return view('ventas.store');
    }

    public function show($id)
    {
        // Mostrar los detalles de una venta específica
        
        return view('ventas.show');
    }
}

