<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::first0rCreate([
            'nama' => 'Admin VetCare',
            'email' => 'admin@vetcare.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
