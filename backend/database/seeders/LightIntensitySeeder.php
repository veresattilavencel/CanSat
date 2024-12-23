<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LightIntensitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("light_intensity")->insert([
            [
                'Time' => "2024-02-14",
                'Lux' => 34400.22
            ],
            [
                'Time' => "2024-01-14",
                'Lux' => 2222
            ],
            [
                'Time' => "2024-03-15",
                'Lux' => 12.55
            ],
        ]);
    }
}
