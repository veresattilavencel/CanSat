<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\BarometicSensor;
use App\Models\LightIntensity;
use App\Models\SensirionSps30;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(BarometicSensorSeeder::class);
        $this->call(GPSSeeder::class);
        $this->call(GyroscopeSeeder::class);
        $this->call(LightIntensitySeeder::class);
        BarometicSensor::factory(10)->create();
        LightIntensity::factory(10)->create();
        SensirionSps30::factory(10)->create();
    }
}
