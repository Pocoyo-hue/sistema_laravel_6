<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de tener el modelo Producto

class AlmacenController extends Controller
{
    public function index()
    {
        // Obtener todos los productos y pasar a la vista
       
        return view('almacen.index', compact('productos'));
    }

    public function create()
    {
        // Mostrar el formulario para agregar un nuevo producto
        return view('almacen.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar el nuevo producto
        return view('almacen.store');
    }

    public function show($id)
    {
        // Mostrar los detalles de un producto específico
        
        return view('almacen.show');
    }

    public function edit($id)
    {
        // Mostrar el formulario para editar un producto
        
        return view('almacen.edit');
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar el producto
        
        return view('almacen.index');
    }

    public function destroy($id)
    {
        // Eliminar un producto
       
        return redirect()->route('almacen.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
