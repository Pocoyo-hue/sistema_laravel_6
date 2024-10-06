<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // Asegúrate de tener el modelo Cliente
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    
    public function index(){

        return redirect()->route('show_cliente_all');

    }

    public function create(){

        return view('cliente.create');

    }

    public function store(Request $request){
        
        $cliente = new Cliente(Array(

            'nombreCliente' => $request->get('nombreCliente'),
            'apellidosCliente' => $request->get('apellidosCliente'),
            'dniCliente' => $request->get('dniCliente'),
            'direccionCliente' => $request->get('direccionCliente'),
            'telefonoCliente' => $request->get('telefonoCliente'),
            'correoCliente' => $request->get('correoCliente')
        ));
        
        $cliente->save();

        return redirect()->route('home')->with('message', 'Cliente creado exitosamente');

    }

    public function show_all(){

        $clientes = DB::table('clientes')->get();

        return view('cliente.index',['clientes' => $clientes]);

    }

}
