<?php

namespace Database\Factories;

use App\Models\User_fund;
use App\Models\User;
use App\Models\Fund;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_fund>
 */
class user_fundFactory extends Factory
{
    protected $model = User_fund::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        return [
            'user_id' => User::factory(),
            'fund_id' => Fund::factory(),
        ];

    }
}
