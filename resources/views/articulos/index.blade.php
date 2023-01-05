@extends('adminlte::page')

@section('title', 'LOGIN - CRUD')

@section('content_header')
<h1>Listado de Productos</h1>
@stop

@section('content')

<a href="articulos/create" class="btn btn-outline-primary my-4">Crear</a>
<div class="container pb-5">

    <table id='articulos' class="table table-dark table-striped mt-4 shadow-lg mt-4">

        <thead class="text-light bg-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">codigo</th>
                <th scope="col">Descipciones</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precios</th>
                <th scope="col">Acciones</th>
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
                <td>
                    <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info m-2">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(document).ready(function() {
        $('#articulos').DataTable();
    });
</script>
@stop