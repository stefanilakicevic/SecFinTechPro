<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\User_fund;

class user_fundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        $users->each(function ($user) {
            User_fund::factory()->count(10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
