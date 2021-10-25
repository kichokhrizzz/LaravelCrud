@extends('layouts.plantillabase')

@section('contenido')

<h1>Crear un nuevo registro</h1>

<form action="/articulos" method="POST">

    @csrf

    <div class="mb-3">

        <label for="" class="form-label">Còdigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1">

    </div>

    <div class="mb-3">

        <label for="" class="form-label">Descripciòn</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2">

    </div>

    <div class="mb-3">

        <label for="" class="form-label">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3">

    </div>

    <div class="mb-3">

        <label for="" class="form-label">Precio</label>
        <input type="number" id="precio" name="precio" class="form-control" step="any" value="0.00" tabindex="4">

    </div>

    <a class="btn btn-secondary" href="/articulos" tabindex="5">Cancelar</a>
    <button type="submit"  class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection