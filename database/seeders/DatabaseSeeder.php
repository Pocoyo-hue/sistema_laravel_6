<?php

namespace Database\Seeders;

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

        $venta = new Venta();
        $venta-> metodopago = "Efectivo";
        $venta-> fechaventa = "29/09/2024";
        $venta-> totalfactura = 200.10;
        $venta->save();

        $venta2 = new Venta();
        $venta2-> metodopago = "Tarjeta";
        $venta2-> fechaventa = "29/09/2024";
        $venta2-> totalfactura = 50.0;
        $venta2->save();
        
       //  User::factory()->create([
       //     'name' => 'Test User',
       //     'email' => 'test@example.com',
       // ]);
    }
}
