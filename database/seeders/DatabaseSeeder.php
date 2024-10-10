<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\User;
use App\Models\Venta;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory(10)->create();

        $producto = new Producto();
        $producto-> idProveedor = 25487455;
        $producto-> codigoProducto = 1;
        $producto-> nombreProducto = "Cemento";
        $producto-> descripcionProducto = "Puro y de calidad";
        $producto-> cantidadProducto = 15;
        $producto-> costoProducto= 25.0;
        $producto-> gananciaProducto = 5.2;
        $producto-> precioProducto = 19.8;
        $producto-> imageProducto= "123";
        $producto->save();

       //  User::factory()->create([
       //     'name' => 'Test User',
       //     'email' => 'test@example.com',
       // ]);
    }
}
