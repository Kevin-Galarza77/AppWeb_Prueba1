<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
    <div class='position-absolute m-3 top-0 end-0'>
        <a href="{{route('login')}}" class="btn btn-success m-2">Login</a>
        <a href="{{route('register')}}" class="btn btn-primary m-2">Crear Cuenta</a>
    </div>

    <h1 class="text-center my-5">Listado de Productos</h1>

    <div class="container pb-5">

        <table id='articulos' class="table table-dark table-striped mt-4 shadow-lg mt-4">

            <thead class="text-light bg-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">codigo</th>
                    <th scope="col">Descipciones</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precios</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articulos as $articulo)
                <tr>
                    <td>{{$articulo -> id}}</td>
                    <td>{{$articulo -> codigo}}</td>
                    <td>{{$articulo -> descripcion}}</td>
                    <td>{{$articulo -> cantidad}}</td>
                    <td>{{$articulo -> precio}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#articulos').DataTable();
        });
    </script>

</body>

</html>