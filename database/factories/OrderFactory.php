<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_date' => $this->faker->date(),
            'total_amount' => $this->faker->randomFloat(2, 1),
            'status' => $this->faker->randomElement(['pending', 'shipped', 'delivered']),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
