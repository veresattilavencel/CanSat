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
        Schema::create('gyroscope', function (Blueprint $table) {
            $table->id();
            $table->dateTime("Time", 7);
            $table->float("x_rotation")->nullable();
            $table->float("y_rotation")->nullable();
            $table->float("z_rotation")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyroscope');
    }
};
