<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ProveedorController;
/*
|--------------------------------------------------------------------------
| Rutas de ventas
|--------------------------------------------------------------------------
*/

Route::controller(VentaController::class)->group(function(){
    Route::get('ventas', 'index');           // Listar todas las ventas
    Route::get('ventas/create', 'create')->name('create_venta');   // Formulario para crear una nueva venta
    Route::post('ventas/store', 'store');    // Guardar una nueva venta en la base de datos
    Route::get('ventas/{id}', 'show')->name('store_venta');       // Ver detalles de una venta específica
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
| Rutas de proveedores
|--------------------------------------------------------------------------
*/

Route::controller(ProveedorController::class)->group(function(){
    Route::get('proveedor', 'index')->name('proveedor_index');           // Listar todos los proveedores
    Route::get('proveedor/create', 'create')->name('proveedor_create');   // Formulario para agregar un nuevo proveedor
    Route::post('proveedor/store', 'store')->name('proveedor_store');    // Guardar un nuevo proveedor en la base de datos
    Route::get('proveedor/search','search')->name('search_proveedor');  // Formulario para ingresar RUC del proveedor
    Route::get('proveedor/show_all', 'show_all')->name('show_proveedor_all');       // Ver detalles de un proveedor específico
    Route::get('proveedor/show', 'show')->name('proveedor_show');       // Ver detalles de un proveedor específico
    Route::get('proveedor/search_edit', 'search_edit')->name('search_edit');  // Formulario para editar un proveedor
    Route::get('proveedor/edit', 'edit_get')->name('proveedor_get'); //obtenemos datos de proveedor
    Route::get('proveedor/{id}/edits','edit_get2')->name('proveedor_get2'); //obtenemos datos de proveedor
    Route::get('proveedor/{id}/edit', 'edit')->name('proveedor_edit');     // Formulario para editar un proveedor
    Route::put('proveedor/{id}', 'update')->name('proveedor_update');     // actualizamos al proveedor
    Route::get('proveedor/destroy', 'destroy')->name('proveedor_destroy'); // obtenemos datos de proveedor
    Route::get('proveedor/{id}/destroy', 'delete_get')->name('delete_get'); // obtenemos datos de proveedor
    Route::delete('proveedor/{id}','delete')->name('proveedor_delete'); //Eliminamos al proveedor
});


/*
|--------------------------------------------------------------------------
| Página principal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});
