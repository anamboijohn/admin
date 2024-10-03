<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_type_id' => rand(1, 10),
            'car_status_id' => rand(1, 3),
            'car_number' => $this->faker->uuid(),
            'last_maintenance_date' => $this->faker->date(),
        ];
    }
}