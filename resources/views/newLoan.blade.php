@extends('app')
@section('content')
    <h1> Nuevo prestamo</h1>
    <form  method ='POST' action="{{route('loanCreated')}}">
        @csrf
        <label for="">Título</label>
        <input class="d-block mb-2" type="text" name="book" value="{{$book->title}}" readonly>
        <label for="">Autor</label>
        <label for="">Libro ID</label>
        <input class="d-block mb-2" type="text" name="book_id" value="{{$book->id}}" readonly>
        <label for="">Autor</label>
        <input  class="d-block mb-2" type="text" name="author" value="{{$book->author}}" readonly>
        <label for="">Usuario</label>
        <input class="d-block mb-2" type="text" name="user">
        <label for="">Fecha de inicio</label>
        <input class="d-block mb-2" type="text" name="dateLoan">
        <label for="">Fecha devolución</label>
        <input class="d-block mb-2" type="text" name="dateReturn">
        <label for="">Disponibilidad</label>
        <input class="d-block mb-2" type="text" name="available">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection
