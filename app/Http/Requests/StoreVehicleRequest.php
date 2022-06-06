<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'brand' => 'required',
            'model' => 'required',
            'odometer' => 'required|numeric|gte:0',
            'fuel_type' => 'required',
        ];
    }
}
