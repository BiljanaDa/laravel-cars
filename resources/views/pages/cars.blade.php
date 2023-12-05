@extends('layout.default')

@section('content')
<div>
    @foreach ($cars as $car )
    @include('components.car')
        
    @endforeach
</div>
@endsection
