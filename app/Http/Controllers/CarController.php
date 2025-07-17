<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
         return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'car_price' => 'required|numeric',
            'car_details' => 'required',
            'car_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imageName = time().'.'.$request->car_image->extension();
        $request->car_image->move(public_path('car_images'), $imageName);

        Car::create([
            'car_name' => $request->car_name,
            'car_price' => $request->car_price,
            'car_details' => $request->car_details,
            'car_image' => $imageName
        ]);

        return redirect()->route('cars.index')->with('success', 'Car added successfully.');
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'car_name' => 'required',
            'car_price' => 'required|numeric',
            'car_details' => 'required',
        ]);

        $data = $request->only(['car_name', 'car_price', 'car_details']);

        if ($request->hasFile('car_image')) {
            $imageName = time().'.'.$request->car_image->extension();
            $request->car_image->move(public_path('car_images'), $imageName);
            $data['car_image'] = $imageName;
        }

        $car->update($data);

        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
    
}