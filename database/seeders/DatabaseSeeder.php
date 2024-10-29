<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Akun admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);

        // Settings
        Setting::create([
            'logo' => null,
            'title' => 'Produk'
        ]);
    }
}
