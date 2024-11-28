
@extends('layouts.plantilla')

@section('title','Productos')

@section('content')


    @if(session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    
    <div class="container">
        <h1>En esta pagina podras ver a todos los prodcutos</h1>

        @foreach ($productos as $pro)
        <div class="tarjeta">

            <div class="titulo">{{$pro->nombreProducto}}</div>
            <div class="titulo">S/ {{$pro->precioProducto}}</div>
            <div class="cuerpo">

            <img src="{{$pro->imageProducto}}.jpg" alt="muestra" width="150px" height="150px”">

                {{$pro->descripcionProducto}}

            </div>

            <div class="pie">
                <form action="{{route('agregar_carro',$pro->id)}}" method="post">

                    {{csrf_field()}}

                    <label for="">Cantidad:</label>
                    <input type="number" name="cantidadProducto" min="1" value="1" required>



                    <button type="submit">Add</button>
                </form>

            </div>

        </div>
        @endforeach
    </div>
@endsection
