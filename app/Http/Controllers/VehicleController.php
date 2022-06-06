<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::paginate();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(StoreVehicleRequest $request)
    {
        Vehicle::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'odometer' => $request->odometer,
            'fuel_type' => $request->fuel_type,
            'owner_id' => Auth()->user()->id
        ]);
        return redirect()->route('vehicles.index')->with('message', 'Vehicle created successfully!');
    }

    public function show(Vehicle $vehicle)
    {
        //TO-DO
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return redirect()->route('vehicles.index')->with('message', 'Vehicle updated successfully!');
    }

    public function destroy(Vehicle $vehicle)
    {
        //TO-DO
    }
}
