<?php

use Illuminate\Database\Seeder;
use App\Models\Role; // Ganti dengan model yang sesuai

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        // Tambahkan role lainnya sesuai kebutuhan
    }
}

