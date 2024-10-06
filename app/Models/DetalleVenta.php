<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $table = 'detalleventas';

    protected $fillable = ['idVenta', 'idProducto', 'cantidadDetalleVenta', 'subtotalDetalleVenta' , 'totalDetalleVenta'];
}
