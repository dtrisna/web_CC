<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
    ['email' => 'admin@vetcare.com'],
    [
        'nama' => 'Admin VetCare',
        'password' => bcrypt('admin123'),
        'role' => 'admin',
    ]
);
    }
}
