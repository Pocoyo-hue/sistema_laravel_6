<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AlmacenController;

/*
|--------------------------------------------------------------------------
| Rutas de ventas
|--------------------------------------------------------------------------
*/

Route::controller(VentaController::class)->group(function(){
    Route::get('ventas', 'index');           // Listar todas las ventas
    Route::get('ventas/create', 'create');   // Formulario para crear una nueva venta
    Route::post('ventas/store', 'store');    // Guardar una nueva venta en la base de datos
    Route::get('ventas/{id}', 'show');       // Ver detalles de una venta específica
});

/*
|--------------------------------------------------------------------------
| Rutas de almacen (productos)x
|--------------------------------------------------------------------------
*/

Route::controller(AlmacenController::class)->group(function(){
    Route::get('almacen', 'index');           // Listar todos los productos en el almacén
    Route::get('almacen/create', 'create');   // Formulario para agregar un nuevo producto
    Route::post('almacen/store', 'store');    // Guardar un nuevo producto en la base de datos
    Route::get('almacen/{id}', 'show');       // Ver detalles de un producto específico
    Route::get('almacen/{id}/edit', 'edit');  // Formulario para editar un producto
    Route::put('almacen/{id}', 'update');     // Actualizar un producto
    Route::delete('almacen/{id}', 'destroy'); // Eliminar un producto del almacén
});

/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});
