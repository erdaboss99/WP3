<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('odometer');
            $table->string('fuel_type');
            $table->string('owner_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
