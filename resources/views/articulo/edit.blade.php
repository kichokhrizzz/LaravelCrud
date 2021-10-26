@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar articulo</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label for="" class="form-label">Còdigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{$articulo->codigo}}">

    </div>

    <div class="mb-3">

        <label for="" class="form-label">Descripciòn</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">

    </div>

    <div class="mb-3">

        <label for="" class="form-label">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">

    </div>

    <div class="mb-3">

        <label for="" class="form-label">Precio</label>
        <input type="number" id="precio" name="precio" class="form-control" step="any"  tabindex="4" value="{{$articulo->precio}}">

    </div>

    <a class="btn btn-secondary" href="/articulos" tabindex="5">Cancelar</a>
    <button type="submit"  class="btn btn-primary" tabindex="4">Guardar cambios</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
