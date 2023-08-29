@extends('app')
@section('title', 'Añade tu libro')
@section('content')
    <h1> {{ $title }}</h1>
    <form  method ='POST' action="{{route('bookAdded')}}">
        @csrf
        <label for="">Título</label>
        <input class="d-block mb-2" type="text" name="title">
        <label for="">Autor</label>
        <input  class="d-block mb-2" type="text" name="author">
        <label for="">Género</label>
        <input class="d-block mb-2" type="text" name="genre">
        <label for="">Año de publicación</label>
        <input class="d-block mb-2" type="text" name="post-year">
        <label for="">ISBN</label>
        <input class="d-block mb-2" type="text" name="isbn">
        <input type="submit" class="btn btn-primary" value="Guardar">
    </form>
@endsection
