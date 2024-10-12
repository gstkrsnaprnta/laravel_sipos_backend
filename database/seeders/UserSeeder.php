<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan ini
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 15 User Dummy
        User::factory()->count(15)->create();
    }
}
