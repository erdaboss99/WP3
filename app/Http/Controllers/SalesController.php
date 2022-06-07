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
}
