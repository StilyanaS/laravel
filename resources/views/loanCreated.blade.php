@extends('app')

@section('content')
@if ($loan)
<p>Se ha creado un nuevo prestamo</p>
@else 
<p>No se ha creado el prestamo</p>
@endif
@endsection