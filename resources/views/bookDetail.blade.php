@extends('app')
@section('content')
    <h1> {{ $book->title }}</h1>
    <h3>Author: {{ $book->author }}</h3>
    <p>Genero: {{ $book->genre }}</p>
    @if (!$book->postYear)
    <p>No hay datos para el año de publicación</p>
    @else
    <p>Año de publicación: {{ $book->postYear }}</p>
    @endif
    @if (!$book->ISBN)
    <p>No se ha proporcionado ISBN</p>
    @else
    <p>ISBN: {{ $book->ISBN }}</p>
    @endif
@endsection
