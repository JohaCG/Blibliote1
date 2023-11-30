<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título de tu Documento</title>
    <style>
        body {
            background-image:url('{{ asset('imagenes/1.jpg') }}');
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            text-align: center;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        form:not(:last-child) {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="{{ url('indexAutor') }}" method="get">
        @csrf
        <button type="submit">Explorar Autores</button>
    </form>

    <form action="{{ url('indexLibro') }}" method="get">
        @csrf
        <button type="submit">Explorar Libros</button>
    </form>
</body>
</html>

