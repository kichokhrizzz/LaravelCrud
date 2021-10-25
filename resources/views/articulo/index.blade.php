@extends('layouts.plantillabase')

@section('contenido')

<a href="articulos/create" class="btn btn-primary"> Crear nuevo artìculo </a>

<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th class="col">ID</th>
            <th class="col">Còdigo</th>
            <th class="col">Descripcion</th>
            <th class="col">Cantidad</th>
            <th class="col">Precio</th>
            <th class="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>
                <form action="{{ route('articulos.destroy' , $articulo->id)}}" method="POST">
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection