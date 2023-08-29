@extends('app')
@section('titlePage', 'Modifica tu libro')
@section('content')
    
    <form action="{{route('updatedBook')}}" method ='POST'>
        @csrf
        <label for="">Título</label>
        <input class="d-block mb-2" type="text" name="title" value={{$book->title}}>
        <label for="">Autor</label>
        <input  class="d-block mb-2" type="text" name="author" value={{$book->author}}>
        <label for="">Género</label>
        <input class="d-block mb-2" type="text" name="genre" value={{$book->genre}}>
        <label for="">Año de publicación</label>
        <input class="d-block mb-2" type="text" name="post-year" value={{$book->postYear}}>
        <label for="">ISBN</label>
        <input class="d-block mb-2" type="text" name="isbn" value={{$book->isbn}}>
        <label for="">Disponible</label>
        <input class="d-block mb-2" type="text" name="available" value={{$book->available}}>
        <input type="text" value={{$book->id}}>
        <input type="submit" class="btn btn-primary" value="Modificar">
    </form>
@endsection
