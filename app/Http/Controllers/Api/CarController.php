<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarApiController extends Controller
{
    public function index() {
        return response()->json(Car::all());
    }

    public function store(Request $request) {
        $car = Car::create($request->all());
        return response()->json($car, 201);
    }

    public function show($id) {
        return response()->json(Car::findOrFail($id));
    }

    public function update(Request $request, $id) {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return response()->json($car);
    }

    public function destroy($id) {
        Car::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
