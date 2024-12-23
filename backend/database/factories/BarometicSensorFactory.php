<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BarometicSensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Time' => fake()->dateTime(),
            'Pressure' =>  fake()->randomFloat(7, 0, 100000),
            'Temperature' => fake()->randomFloat(7, 0, 300),
            'Altitude' => fake()->randomFloat(7, 0, 2500)
        ];
    }
}
