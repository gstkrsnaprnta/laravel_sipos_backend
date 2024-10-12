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

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'Admin@gmail.com',
        //     'password' => Hash::make('admin123')
        // ]);

        $this->call([
            ProductSeeder::class,
        ]);

        $this->call([
            UserSeeder::class,
        ]);

        $this->call([
            AdminUserSeeder::class,
        ]);
    }

}
