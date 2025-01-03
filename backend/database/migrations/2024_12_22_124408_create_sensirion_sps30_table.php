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
        Schema::create('sensirion_sps30', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Time", 6);
            $table->float("pm1_concentration")->nullable();
            $table->float("pm2_5_concentration")->nullable();
            $table->float("pm10_concentration")->nullable();
            $table->float("temperature")->nullable();
            $table->float("humidity")->nullable();
            $table->float("flow_rate")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensirion_sps30');
    }
};
