<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List vehicle on sale') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <form method="POST" action="{{ route('sales.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                @foreach($vehicles as $vehicle)
                                    <x-label for="vehicle_id_label" value="{{ $vehicle->brand.' '.$vehicle->model }}" />
                                    <x-input id="vehicle_id" class="" type="radio" name="vehicle_id" value="{{ $vehicle->id }}" autofocus />
                                @endforeach
                            </div>
                            <div>
                                <x-label for="price" :value="__('Price')" />
                                <x-input id="price" class="block mt-1 w-full" type="text" name="price" placeholder="Enter price" autofocus />
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('List on sale') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
