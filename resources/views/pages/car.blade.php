@extends('layout.default')

@section('content')
<div class="container">
    
    <h1>{{ $car->title }}</h1>
    <p>{{ $car->producer }}</p>
    <p>{{ $car->number_of_doors }}</p>
    
</div>
@endsection