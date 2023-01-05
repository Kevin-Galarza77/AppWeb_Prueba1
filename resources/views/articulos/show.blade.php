@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
<h2 class="text-center">Producto : {{$articulo->codigo}} </h2>
<hr>
@stop

@section('content')
<div class="container shadow-lg p-5 bg-light">
    
    <div class="row my-5">
        <div class="col " style="font-weight: bolder;">
            ID:
        </div> 
        <div class="col ">
        {{$articulo->id}}
        </div>   
    </div>
    <div class="row my-5">
        <div class="col " style="font-weight: bolder;">
            Código:
        </div> 
        <div class="col ">
        {{$articulo->codigo}}
        </div>   
    </div>
    <div class="row my-5">
        <div class="col " style="font-weight: bolder;">
            Descripción:
        </div> 
        <div class="col ">
        {{$articulo->descripcion}}
        </div>   
    </div>
    <div class="row my-5">
        <div class="col " style="font-weight: bolder;">
            Cantidad:
        </div> 
        <div class="col ">
        {{$articulo->cantidad}}
        </div>   
    </div>
    <div class="row my-5">
        <div class="col " style="font-weight: bolder;">
            Precio:
        </div> 
        <div class="col ">
        $ {{$articulo->precio}}
        </div>   
    </div>
    <div class="row justify-content-end">
        <a href="{{route('articulos.index')}}" class="btn btn-danger px-5">Regresar</a>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop