<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fund;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fund>
 */
class fundFactory extends Factory
{
    private static $counter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fund_category_id = \App\Models\Fund_category::all()->random()->id;
        $fund_sub_category_id = \App\Models\Fund_sub_category::all()->random()->id;

        $name = 'Fund ' . self::$counter . ' FundCategoryID: ' . $fund_category_id . ' FundSubCategoryID: ' . $fund_sub_category_id;


        self::$counter++;
        return [
            'name' => $name,
            'fund_category_id' =>  $fund_category_id, 
            'fund_sub_category_id' => $fund_sub_category_id, 
            'isin' => 'ISIN' . str_pad(self::$counter, 3, '0', STR_PAD_LEFT),
            'wkn' => 'WKN' . str_pad(self::$counter, 3, '0', STR_PAD_LEFT),

        ];
    }
}
