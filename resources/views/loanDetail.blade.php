@extends('app')
@section('content')
    <h1> Prestamo id: {{ $loan->id }}</h1>
    <h3>Libro id: {{ $loan->book }}</h3>
    <p>Usuario id: {{ $loan->user }}</p>
    <p>Fecha inicio: {{ $loan->dateLoan }}</p>
    <p>Fecha devolución: {{ $loan->dateReturn }}</p>
    <p>Disponible: {{ $loan->available }}</p>
@endsection
