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
            <a href="/bookdetails/{{$book->id}}" class="btn btn-primary">Show data</a>
            <a href="/updateBook/{{$book->id}}" class="btn btn-primary">Edit data</a>
            <a href="/deleteBook/{{$book->id}}" class="btn btn-primary d-inline">Delete book</a>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection
