<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('./style.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>

    <nav>
        <ul>
            <li><a href="{{route('home')}}">Inicio</a></li>
            <li><a href="">Cliente</a>
                <ul>
                    <li><a href="{{route('cliente_index')}}">Inicio Cliente</a></li>
                    <li><a href="{{route('cliente_create')}}">Crear Cliente</a></li>
                    <li><a href="">Listar Cliente</a></li>
                    <li><a href="">Eliminar Cliente</a></li>
                </ul>
            </li>
            <li><a href="">Proveedor</a>
                <ul>
                    <li><a href="{{route('proveedor_create')}}">Crear Proveedor</a></li>
                    <li><a href="{{route('search_proveedor')}}">Buscar Proveedor</a></li>
                    <li><a href="{{route('show_proveedor_all')}}">Listar Proveedores</a></li>
                    <li><a href="{{route('proveedor_destroy')}}">Eliminar Proveedor</a></li>
                </ul>
            </li>
            <li><a href="">Producto</a>
                <ul>
                    <li><a href="{{route('producto_index')}}">Inicio Producto</a></li>
                    <li><a href="{{route('producto_create')}}">Crear Producto</a></li>
                    <li><a href="">Buscar Producto</a></li>
                    <li><a href="{{route('producto_show_all')}}">Listar Producto</a></li>
                    <li><a href="">Eliminar Producto</a></li>
                    <li><a href="{{route('mostrar_carro')}}">Carrito de Venta</a></li>
                </ul>
            </li>
            <li><a href="">Venta</a></li>
        </ul>
    </nav>

    </header>
    <main>
    @yield('content')
    </main>
</body>
</html>