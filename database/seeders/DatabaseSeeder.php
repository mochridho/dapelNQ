<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'name' => 'Ridho Rizki',
            'email' => 'admin@gmail.com',
            'roles' => 'admin',
        ]);

        $this->call([
            SanctionSeeder::class,
            ViolationSeeder::class,
            SantriSeeder::class,
        ]);
    }
}
