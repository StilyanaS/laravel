@extends('app')
@section('content')
    <h1> {{ $book->title }}</h1>
    <h3>Author: {{ $book->title }}</h3>
    <p>Genero: {{ $book->genre }}</p>
    @if (!$book->postYear)
    <p>No hay datos para el año de publicación</p>
    @else
    <p>Año de publicación: {{ $book->postYear }}</p>
    @endif
    @if (!$book->postYear)
    <p>No se ha proporcionado ISBN</p>
    @else
    <p>ISBN: {{ $book->isbn }}</p>
    @endif
@endsection
