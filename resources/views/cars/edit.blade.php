@extends('layout')

@section('content')
<h2>Edit Car</h2>
<form method="POST" action="{{ route('cars.update', $car) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="car_name" class="form-control" value="{{ $car->car_name }}" required>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="text" name="car_price" class="form-control" value="{{ $car->car_price }}" required>
    </div>
    <div class="mb-3">
        <label>Details</label>
        <textarea name="car_details" class="form-control" required>{{ $car->car_details }}</textarea>
    </div>
    <div class="mb-3">
        <label>Current Image</label><br>
        <img src="{{ asset('car_images/'.$car->car_image) }}" width="150">
    </div>
    <div class="mb-3">
        <label>Change Image</label>
        <input type="file" name="car_image" class="form-control">
    </div>
    <button class="btn btn-primary">Update Car</button>
</form>
@endsection
