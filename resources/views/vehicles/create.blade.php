<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Vehicle') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <form method="POST" action="{{ route('vehicles.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <x-label for="brand" :value="__('Brand')" />
                                <x-input id="brand" class="block mt-1 w-full" type="text" name="brand" placeholder="Enter brand" autofocus />
                            </div>
                            <div>
                                <x-label for="model" :value="__('Model')" />
                                <x-input id="model" class="block mt-1 w-full" type="text" name="model" placeholder="Enter model" autofocus />
                            </div>
                            <div>
                                <x-label for="odometer" :value="__('Odometer')" />
                                <x-input id="odometer" class="block mt-1 w-full" type="text" name="odometer" placeholder="Enter odometer" autofocus />
                            </div>
                            <div>
                                <x-label for="fuel_type" :value="__('Fuel type')" />

                                <x-label for="fuel_type_petrol" :value="__('Petrol')" />
                                <x-input id="fuel_type" class="" type="radio" name="fuel_type" value="0" autofocus />

                                <x-label for="fuel_type_diesel" :value="__('Diesel')" />
                                <x-input id="fuel_type" class="" type="radio" name="fuel_type" value="1" autofocus />

                                <x-label for="fuel_type_electric" :value="__('Electric')" />
                                <x-input id="fuel_type" class="" type="radio" name="fuel_type" value="2" autofocus />
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
