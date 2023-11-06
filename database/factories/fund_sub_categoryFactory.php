<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fund_sub_category>
 */
class fund_sub_categoryFactory extends Factory
{
    private static $counter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomNumber = $this->faker->numberBetween(1, 10);
        $name = 'SubCategory ' . self::$counter . ' SubCategoryID: ' . $randomNumber;
        self::$counter++;

        return [
            'category_id' => \App\Models\Fund_category::all()->random()->id, 
            'name' => $name,
        ];
    }
}
