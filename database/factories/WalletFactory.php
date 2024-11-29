<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wallet;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wallet>
 */
class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Wallet::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // or some valid user ID
            'balance' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
