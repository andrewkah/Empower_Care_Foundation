<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Super Admin',
            ],
            [
                'name' => 'Assistant Admin',
            ],
            
        ];

        foreach ($data as $value) {
                Role::firstOrCreate($value);
        }
    }
}
