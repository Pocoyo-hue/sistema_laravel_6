<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
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
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #e74c3c;
            font-size: 2em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 30px;
        }
        button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #c0392b;
        }
        .btn-cancel {
            background-color: #7f8c8d;
            margin-right: 15px;
        }
        .btn-cancel:hover {
            background-color: #95a5a6;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Eliminar Producto</h1>
        <p>¿Estás seguro de que deseas eliminar este producto?</p>
        <form action="/almacen/delete" method="POST">
            <!-- Aquí puedes agregar un campo hidden si necesitas enviar el ID del producto -->
            <input type="hidden" name="producto_id" value="123">
            
            <button type="submit">Eliminar Producto</button>
            <button type="button" class="btn-cancel"><a href="/almacen">Cancelar</a></button>
        </form>
    </div>
</body>
</html>
