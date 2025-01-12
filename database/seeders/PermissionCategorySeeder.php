<?php

namespace Database\Seeders;

use App\Models\PermissionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = array(
            array('name' => 'Articles'),//1,
            array('name' => 'Article Categories'),//2,
            array('name' => 'Users'),//3
            array('name' => 'Banners'),//4
            array('name' => 'Causes'),//5
            array('name' => 'Donations'),//6
            array('name' => 'Policies'),//7
            array('name' => 'Volunteers'),//8
            array('name' => 'FAQS'),//9
            array('name' => 'Events'),//10
            array('name' => 'Event Categories'),//11
            array('name' => 'Album'),//12
            array('name' => 'Video'),//13
            array('name' => 'Inquires'),//14
            array('name' => 'Programs'),//15
            array('name' => 'Settings'),//16
            array('name' => 'Team'),//17
            array('name' => 'Partners'),//18
            array('name' => 'Roles'),//19
        );
        foreach ($categories as $category) {
            PermissionCategory::firstOrCreate($category);
        }
    }
}
