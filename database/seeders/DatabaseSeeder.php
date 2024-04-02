<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $user = User::factory()->create([
            'name' => 'igiz',
            'email' => 'igizstarkle@gmail.com',
            'password' =>Hash::make('password')
        ]);

        $role = Role::create(['name' => 'admin']);
        $user->assignRole($role);
    }
}
