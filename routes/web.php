<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenido a la página principal";
});

//Agregando nueva ruta
Route::get('practicas-profesionales', function(){
    return "Bienvenido a la Gestión de Prácticas Preprofesionales";
});

//Agregando nueva ruta para CREAR un nuevo registro
Route::get('practicas/create', function(){
    return "En esta página podrás crear un nuevo registro.";
});

/*
//Agregando nueva ruta con variable
Route::get('practicas/{procedimiento}',function($procedimiento){
    return "Bienvenido al procedimiento: $procedimiento";
});

//Agregando nueva ruta con dos variable
Route::get('practicas/{procedimiento}/{registro}',function($procedimiento,$registro){
    return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
});
*/

//Mejorando codigo de ruta con variables
Route::get('practicas/{procedimiento}/{registro}',function($procedimiento,$registro){
    if($registro){//si indica un registro
        return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
    }else{//en caso que no se indica un registro
        return "Bienvenido al procedimiento: $procedimiento";
    }
});