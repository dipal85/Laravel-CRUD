@extends('layout')

@section('content')
<h2>Car Products</h2>
<a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Add New Car</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table id="cars-table" class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Price (₹)</th>
            <th>Details</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->car_name }}</td>
            <td><img src="{{ asset('car_images/'.$car->car_image) }}" width="100"></td>
            <td>{{ $car->car_price }}</td>
            <td>{{ $car->car_details }}</td>
            <td>
                <a href="{{ route('cars.show', $car) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Confirm delete?')" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('#cars-table').DataTable({
        "pageLength": 5
    });
});
</script>
@endsection