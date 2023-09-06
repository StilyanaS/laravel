@extends('app')
@section('content')
    
    <form action="{{route('updatedLoan')}}" method ='POST'>
        @csrf
        <label for="">Prestamo id</label>
        <input class="d-block mb-2" type="text" name="title" value={{$loan->id}}>
        <label for="">Libro id</label>
        <input  class="d-block mb-2" type="text" name="book" value={{$loan->book}}>
        <label for="">Usuario</label>
        <input class="d-block mb-2" type="text" name="user" value={{$loan->user}}>
        <label for="">fecha de inicio</label>
        <input class="d-block mb-2" type="text" name="dateLoan" value={{$loan->dateLoan}}>
        <label for="">fecha de devolución</label>
        <input class="d-block mb-2" type="text" name="dateReturn" value={{$loan->dateReturn}}>
        <label for="">Disponible</label>
        <input class="d-block mb-2" type="text" name="available" value={{$loan->available}}>
        <input type="submit" class="btn btn-primary" value="Modificar">
    </form>
@endsection
