<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SavingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tellers = \App\Models\User::factory(5)->create();

        $clients = \App\Models\User::factory(10)->create();

        for($i = 0; $i < 100; $i++) {
            \App\Models\Saving::create([
                'client_id' => $clients->random()->id,
                'created_by' => $tellers->random()->id,
                'amount' => rand(1000, 100000),
            ]);
        }
    }
}
