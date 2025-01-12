<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate([
            'email' => 'andrewkah2022@gmail.com',
            'name' => 'Admin',
            'password' => Hash::make('password'),
        ]);
        // assign "Super Admin" role
        $user->assignRole('Super Admin');
    }
}
