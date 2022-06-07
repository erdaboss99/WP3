<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //Admin user
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'access_level' => '1',
        ]);
        //Test vehicles
        \App\Models\Vehicle::factory()->create([
            'brand' => 'Mercedes',
            'model' => 'EQC',
            'odometer' => '20',
            'fuel_type' => '2',
            'owner_id' => '1',
        ]);
        \App\Models\Vehicle::factory()->create([
            'brand' => 'Audi',
            'model' => 'Q7',
            'odometer' => '32000',
            'fuel_type' => '0',
            'owner_id' => '2',
        ]);
        \App\Models\Vehicle::factory()->create([
            'brand' => 'BMW',
            'model' => 'X6M',
            'odometer' => '120000',
            'fuel_type' => '1',
            'owner_id' => '3',
        ]);
        \App\Models\Sale::factory()->create([
            'user_id' => '1',
            'vehicle_id' => '1',
            'price' => '30000000',
        ]);
        \App\Models\Sale::factory()->create([
            'user_id' => '2',
            'vehicle_id' => '2',
            'price' => '20000000',
        ]);
        \App\Models\Sale::factory()->create([
            'user_id' => '3',
            'vehicle_id' => '3',
            'price' => '25000000',
        ]);
        $this->call(UserSeeder::class);
    }
}
