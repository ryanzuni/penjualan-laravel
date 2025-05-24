<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // ✅ tambahkan baris ini

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'admin',
            'id_member' => 'M001',
            'password' => Hash::make('123456'),
        ]);
    }
}
