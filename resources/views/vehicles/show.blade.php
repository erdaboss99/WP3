<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vehicle detail') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('vehicles.index') }}"
                   class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Go back
                </a>
                <table class="w-full table-fixed">
                    <tbody>
                    <tr>
                        <td class="px-4 py-2 font-bold">Brand</td>
                        <td>{{ $vehicle->brand }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold">Model</td>
                        <td>{{ $vehicle->model }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold">Odometer</td>
                        <td>{{ $vehicle->odometer.' KM' }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold">Fuel type</td>
                        <td>
                            @if ($vehicle->fuel_type == 0)
                                Petrol
                            @elseif ($vehicle->fuel_type == 1)
                                Diesel
                            @else
                                Electric
                            @endif</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold">Updated on</td>
                        <td>{{ date_format($vehicle->updated_at, 'jS F Y g:i A') }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-bold">Added on</td>
                        <td>{{ date_format($vehicle->created_at, 'jS F Y g:i A') }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
