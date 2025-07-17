@extends('layout')

@section('content')
<h2>Add New Car</h2>
<form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="car_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="text" name="car_price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Details</label>
        <textarea name="car_details" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="car_image" class="form-control" required>
    </div>
    <button class="btn btn-primary">Add Car</button>
</form>
@endsection
