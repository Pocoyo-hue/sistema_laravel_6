<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 800px;
            text-align: center;
        }
        h1 {
            color: #1e90ff; /* Azul */
            text-transform: uppercase;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f39c12; /* Amarillo */
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        button {
            background-color: #1e90ff; /* Azul */
            color: white;
            padding: 10px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #005bb5; /* Azul más oscuro */
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Productos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto 1</td>
                    <td>$100.00</td>
                    <td>20</td>
                    <td>Herramientas</td>
                    <td>
                        <button><a href="/almacen/edit/1">Editar</a></button>
                        <button><a href="/almacen/delete/1">Eliminar</a></button>
                    </td>
                </tr>
                <tr>
                    <td>Producto 2</td>
                    <td>$50.00</td>
                    <td>15</td>
                    <td>Pinturas</td>
                    <td>
                        <button><a href="/almacen/edit/2">Editar</a></button>
                        <button><a href="/almacen/delete/2">Eliminar</a></button>
                    </td>
                </tr>
                <!-- Añadir más productos según sea necesario -->
            </tbody>
        </table>
    </div>
</body>
</html>
