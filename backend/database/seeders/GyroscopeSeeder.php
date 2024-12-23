<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GyroscopeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("gyroscope")->insert([
            [
                'Time' => "2023-12-14",
                'x_rotation' => 12.5555,
                'y_rotation' => 1.006,
                'z_rotation' => 0.000000009
            ],
            [
                'Time' => "2024-01-19",
                'x_rotation' => 12.78,
                'y_rotation' => 19.87,
                'z_rotation' => 1.57
            ],
            [
                'Time' => "2024-03-24",
                'x_rotation' => 3.45,
                'y_rotation' => 0,
                'z_rotation' => 17.77
            ],
        ]);
    }
}
