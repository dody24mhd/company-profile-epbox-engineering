<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Super Admin (default)
        User::query()->updateOrCreate(
            ['email' => 'admin@epbox-engg.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Localhost007!@#'),
                'is_admin' => true,
                'is_super_admin' => true,
            ]
        );
    }
}
