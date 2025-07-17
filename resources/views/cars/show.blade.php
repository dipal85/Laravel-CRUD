@extends('layout')

@section('content')

<h2>Car Details </h2>
<p><strong>Name:</strong> {{ $car->car_name}} </p>
<p><strong>Price:</strong> {{ $car->car_price}} </p>
<p><strong>Details:</strong> {{ $car->car_details}} </p>
<img src="{{ asset('car_images/'.$car->car_image) }}" width="300">
@endsection