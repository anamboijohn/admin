<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubscriptionStatus>
 */
class SubscriptionStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['active', 'canceled', 'past_due'];
        return [
            'name' => $this->faker->randomElement($statuses),
            'slug' => $this->faker->slug(),
        ];
    }
}