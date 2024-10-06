<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = ['razonSocial', 'rucProveedor', 'direccionProveedor', 'telefonoProveedor' , 'correoProveedor'];

    protected function razonSocial():Attribute{//Modificamos la entrada y salida de los datos sin afectar la DB
        return new Attribute(

            get: function($value){
                return ucwords($value);
            },
    
            set: function($value){
                return strtolower($value);
            }

        );

    }

    protected function rucProveedor(): Attribute{//Modificamos la entrada y salida de los datos sin afectar la DB
        return new Attribute(
            get: function ($value) {
                return $value; // No es necesario modificar la salida
            },
            set: function ($value) {
                return preg_replace('/\D/', '', $value); // Solo números
            }
        );
    }

    protected function direccionProveedor():Attribute{//Modificamos la entrada y salida de los datos sin afectar la DB
        return new Attribute(

            get: function($value){
                return ucwords($value);
            },
    
            set: function($value){
                return strtolower($value);
            }

        );

    }

    protected function telefonoProveedor(): Attribute{//Modificamos la entrada y salida de los datos sin afectar la DB
        return new Attribute(
            get: function ($value) {
                return $value; // No es necesario modificar la salida
            },
            set: function ($value) {
                return preg_replace('/\D/', '', $value); // Solo números
            }
        );
    }

    protected function correoProveedor(): Attribute{//Modificamos la entrada y salida de los datos sin afectar la DB
        return new Attribute(
            get: function ($value) {
                return $value; // No es necesario modificar la salida
            },
            set: function ($value) {
                return strtolower($value); // Asegurar que el correo esté en minúsculas
            }
        );
    }
}
