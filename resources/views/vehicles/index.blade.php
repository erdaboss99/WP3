<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold test-xl text-gray-800 leading-tight">
            {{__('Vehicles') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-message />
            <x-error-message />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Brand
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Model
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Odometer(KM)
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">More details</span>
                                            </th>
                                            @if(Auth::user() != NULL)
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Delete</span>
                                                </th>
                                            @endif
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($vehicles as $vehicle)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $vehicle->brand }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $vehicle->model }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $vehicle->odometer }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium">
                                                    <a href="" class="text-indigo-600 hover:text-indigo-900">TO-DO</a>
                                                </td>
                                                @if(Auth::user() != NULL)
                                                    @if(Auth::user()->id == $vehicle->owner_id)
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium">
                                                            <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                        </td>
                                                    @else
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium">
                                                            Not your property!
                                                        </td>
                                                    @endif
                                                    @if (Auth::user()->id == $vehicle->owner_id || Auth::user()->access_level == 1)
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium">
                                                                <input type="submit" value="TO-DO" title="delete" class="text-indigo-600 hover:text-indigo-900">
                                                            </td>
                                                    @else
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-medium">
                                                            TO-DO
                                                        </td>
                                                    @endif
                                                @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    {{ $vehicles->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
