@extends('app')
@section('titlePage', 'Lista de libros')
@section('content')
<div class="row">
    @if ($books->isEmpty())
    <p>Todavía no tenemos libros</p>
    @else
    @foreach ($books as $book)
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$book->title}} {{$book->id}}</h5>
            <p class="card-text">Autor {{$book->author}}</p>
            <p class="card-text">Año de publicación: {{$book->post_year}}</p>
            <a href="/bookdetails/{{$book->id}}" class="btn btn-primary">Mostrar detalle</a>
            <a href="/updateBook/{{$book->id}}" class="btn btn-primary">Editar</a>
            <a href="/deleteBook/{{$book->id}}" class="btn btn-primary d-inline">Borrar</a>
            <a href="/newLoan/{{$book->id}}" class="btn btn-primary d-inline">Crear prestamo</a>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection
