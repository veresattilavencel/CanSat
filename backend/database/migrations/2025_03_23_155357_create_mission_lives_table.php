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
        Schema::create('mission_lives', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Time", 6);
            $table->float("x_Coordinates")->nullable();
            $table->float("y_Coordinates")->nullable();
            $table->float("pm1_concentration")->nullable();
            $table->float("pm2_5_concentration")->nullable();
            $table->float("pm4_concentration")->nullable();
            $table->float("pm10_concentration")->nullable();
            $table->float("nc0_5")->nullable();
            $table->float("nc1_0")->nullable();
            $table->float("nc2_5")->nullable();
            $table->float("nc4_0")->nullable();
            $table->float("nc10_0")->nullable();
            $table->float("nc10_0")->nullable();
            $table->float("typycalParticleSize")->nullable();
            $table->float("accelX")->nullable();
            $table->float("accelY")->nullable();
            $table->float("accelZ")->nullable();
            $table->float("magnetometerX")->nullable();
            $table->float("magnetometerY")->nullable();
            $table->float("magnetometerZ")->nullable();
            $table->float("upperTEMTValue")->nullable();
            $table->float("bottomTEMTValue")->nullable();
            $table->float("temperature")->nullable();
            $table->float("pressure")->nullable();
            $table->float("networkData1")->nullable();
            $table->float("networkData2")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_lives');
    }
};
