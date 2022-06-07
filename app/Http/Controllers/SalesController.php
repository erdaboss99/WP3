<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Models\Sale;
use App\Models\Vehicle;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::with('vehicles', 'users')->get();

        return view('sales.index', compact('sales'));
    }
    public function create()
    {
        $vehiclescount = Vehicle::where([['owner_id', Auth()->user()->id],] )->count();
        $vehicles = Vehicle::where([['owner_id', Auth()->user()->id],] )->get();
        $sales = Sale::with('vehicles')->where('user_id', Auth()->user()->id)->count();

        if($vehiclescount > $sales)
            return view('sales.create', compact('vehicles'));
        else
            return redirect()->route('sales.index')->with('errormessage', 'You don\'t have any vehicle or your vehicles are already on the marketplace');
    }
    public function store(StoreSaleRequest $request)
    {
        Sale::create([
            'user_id' => Auth()->user()->id,
            'vehicle_id' => $request->vehicle_id,
            'price' => $request->price,
        ]);
        return redirect()->route('sales.index')->with('message', 'Vehicle listed on sale successfully!');
    }
}
