@extends('app')

@section('content')
@if ($isbn)
<p>Tu libro con ISBN {{$isbn}} se ha añadido</p>
@else
<p>Tu libro se ha añadido pero te va a ser complicado identificarlo sin ISBN {{$isbn}}</p>
@endif
@endsection