<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Libro</title>
    <style>
        body {
            background-image:url('{{ asset('imagenes/1.jpg') }}');
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            width: 50%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        h3 {
            text-align: center;
            color: #3498db;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <form action="{{url('actualizar', $libro->id)}}" method="post">
        @csrf
        @method('PUT')
        <h3>Datos del libro</h3>
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="{{$libro->titulo}}">
        <label for="year">Año de publicación:</label>
        <input type="number" id="year" name="year" value="{{$libro->year}}">
        <label for="id_autor">Autor:</label>
        <select name="id_autor" id="id_autor">
            @foreach($autor as $item)
                <option value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
        </select>
        <button type="submit">Actualizar Libro</button>
    </form>
</body>

</html>
