<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Libros</title>
    <style>
        body {
            background-image:url('{{ asset('imagenes/1.jpg') }}');
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        td {
            background-color: #f9f9f9;
        }

        form {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        select, button {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button {
            background-color: #3498db;
            color: #fff;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libro</th>
                <th>Autor</th>
                <th>Año de Publicación</th>
                <th>Eliminar</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->year}}</td>
                    <td>
                        <form action="{{url('datos', $item->id)}}" method="post">
                            @csrf
                            @method('delete')
                           <button type="submit">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{url('actualizarLibro', $item->id)}}" method="post">
                            @csrf
                            @method('put')
                           <button type="submit">Actualizar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{url('filtrar')}}" method="GET">
        @csrf
        <select name="datoFiltrado">
            @foreach($autor as $item)
                <option value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
        </select> 
        <button type="submit">Filtrar</button>      
    </form>
</body>

</html>
