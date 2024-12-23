<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SensirionSps30Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "Time" => fake()->dateTime(),
            "pm1_concentration" => fake()->randomFloat(7, 0, 500),
            "pm2_5_concentration" => fake()->randomFloat(7, 0, 500),
            "pm10_concentration" => fake()->randomFloat(7, 0, 500),
            "temperature" => fake()->randomFloat(7, 0, 300),
            "humidity" => fake()->randomFloat(7, 0, 100),
            "flow_rate" => fake()->randomFloat(7, 0, 1)
        ];
    }
}
