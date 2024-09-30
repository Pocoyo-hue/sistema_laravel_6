
@extends('layouts.plantilla')

@section('title','Proveedor ')

@section('content')
    <div class="container">
        <h1>En esta pagina podras Buscar a un proveedor</h1>
        <form action="{{route('proveedor_show')}}" method="GET">

            {{csrf_field()}}

                <label for="RUC">RUC:</label>
                <input type="text" id="rucProveedor" name="rucProveedor" maxlength="11"  placeholder="Buscar proveedor">

            <button type="submit">Buscar Proveedor</button>
        </form>
    </div>

@endsection