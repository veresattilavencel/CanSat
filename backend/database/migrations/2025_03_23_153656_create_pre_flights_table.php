<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pre_flights', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Time", 6);
            $table->float("x_Coordinates")->nullable();
            $table->float("y_Coordinates")->nullable();
            $table->float("accelZ");
            $table->float("temperature")->nullable();
            $table->float("pressure")->nullable();
            $table->float("altitude")->nullable();
            $table->float("networkData1")->nullable();
            $table->float("networkData2")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_flights');
    }
};
