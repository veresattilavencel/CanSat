<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("gps")->insert([
            [
                'Time' => "2024-02-13",
                'Latitude' => 100,
                'Longitude' => 22.2222,
                'HeightAboveSeaLevel' => 1223.5,
                'SpeedAboveGround' => 2.45
            ],
            [
                'Time' => "2024-02-12",
                'Latitude' => -60.66,
                'Longitude' => 70.52,
                'HeightAboveSeaLevel' => 2000,
                'SpeedAboveGround' => 13.58324
            ],
            [
                'Time' => "2024-02-15",
                'Latitude' => 0.0034,
                'Longitude' => -39.67,
                'HeightAboveSeaLevel' => 200.55,
                'SpeedAboveGround' => 29.99
            ],
        ]);
    }
}
