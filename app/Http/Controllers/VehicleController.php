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
        //TO-DO
    }

    public function store(StoreVehicleRequest $request)
    {
        //TO-DO
    }

    public function show(Vehicle $vehicle)
    {
        //TO-DO
    }

    public function edit(Vehicle $vehicle)
    {
        //TO-DO
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        //TO-DO

    }

    public function destroy(Vehicle $vehicle)
    {
        //TO-DO
    }
}
