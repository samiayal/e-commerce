<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_id' => $this->faker->uuid(),
            'payment_method' => $this->faker->randomElement(['credit_card', 'tele birr', 'cash_on_delivery']),
            'amount' => $this->faker->randomFloat(2, 1),
            'status' => $this->faker->randomElement(['pending', 'successful', 'failed', 'refunded']),
            'order_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
