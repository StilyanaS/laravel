@extends('app')
@section('content')
<div class="row">
    @if ($loans->isEmpty())
    <p>Crea un nuevo prestamo</p>
    @else
    @foreach ($loans as $loan)
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$loan->book}}</h5>
            <p class="card-text">Usuario: {{$loan->user}}</p>
            <p class="card-text">Fecha de prestamo: {{$loan->dateLoan}}</p>
            <p class="card-text">Fecha de devolución: {{$loan->dateReturn}}</p>
            <p class="card-text">Devuelto: {{$loan->available}}</p>
            <a href="/loanDetail/{{$loan->id}}" class="btn btn-primary">Show data</a>
            <a href="/updateLoan/{{$loan->id}}" class="btn btn-primary">Edit data</a>
            <a href="/deleteLoan/{{$loan->id}}" class="btn btn-primary d-inline">Delete loan</a>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection
