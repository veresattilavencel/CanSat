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
        Schema::create('barometic_sensor', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Time", 7);
            $table->float("Pressure")->nullable();
            $table->float("Temperature")->nullable();
            $table->float("Altitude")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barometic_sensor');
    }
};
