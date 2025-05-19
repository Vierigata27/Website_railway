<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Contoh pembuatan 1 user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Panggil seeder lainnya
        $this->call([
            AdminSeeder::class,
            KategoriSeeder::class,
            KomponenKomputerSeeder::class,
        ]);
    }
}
