<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarometicSensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("barometic_sensor")->insert([
            [
                'Time' => "2024-02-14 14:51:27.66666",
                'Pressure' => 40000.22,
                'Temperature' => 223,
                'Altitude' => 111.456
            ],
            [
                'Time' => "2024-01-12",
                'Pressure' => 88445,
                'Temperature' => 255.55,
                'Altitude' => 2013.345
            ],
            [
                'Time' => "2024-03-15",
                'Pressure' => 12345.23456,
                'Temperature' => 0.34556,
                'Altitude' => 1225
            ],
        ]);
    }
}
