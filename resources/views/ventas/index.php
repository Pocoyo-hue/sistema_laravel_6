<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ventas</title>
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
            flex-direction: column;
        }
        h1 {
            color: #1e90ff; /* Azul */
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f39c12; /* Amarillo */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e7f1ff; /* Azul claro al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Lista de Ventas</h1>
    <table>
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Cliente</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Martillo</td>
                <td>2</td>
                <td>Juan Pérez</td>
                <td>2024-09-25</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Destornillador</td>
                <td>5</td>
                <td>María López</td>
                <td>2024-09-26</td>
            </tr>
            <!-- Puedes agregar más filas de ventas aquí -->
        </tbody>
    </table>
</body>
</html>
