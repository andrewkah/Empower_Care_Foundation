<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        $permissions = array(

            array('name' => 'article-category-list', 'permission_category_id' => '2', 'description' => 'Show Article Category ', 'guard_name' => 'web', 'crud' => 'show'),
            array('name' => 'article-category-create', 'permission_category_id' => '2', 'description' => 'Create Article Category ', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'article-category-edit', 'permission_category_id' => '2', 'description' => 'Edit Article Category ', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'article-category-delete', 'permission_category_id' => '2', 'description' => 'Delete Article Category ', 'guard_name' => 'web', 'crud' => 'delete'),
            array('name' => 'article-create', 'permission_category_id' => '1', 'description' => 'Create Article ', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'article-show', 'permission_category_id' => '1', 'description' => 'Show Articles ', 'guard_name' => 'web', 'crud' => 'show'),
            array('name' => 'article-edit', 'permission_category_id' => '1', 'description' => 'Edit Article  ', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'article-delete', 'permission_category_id' => '1', 'description' => 'Delete Article', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'cause-list', 'permission_category_id' => '5', 'description' => 'View Causes', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'cause-create', 'permission_category_id' => '5', 'description' => 'Create new Causes', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'cause-show', 'permission_category_id' => '5', 'description' => 'Show  Causes', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'cause-edit', 'permission_category_id' => '5', 'description' => 'Edit Causes', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'cause-delete', 'permission_category_id' => '5', 'description' => 'Delete Causes', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'banner-show', 'permission_category_id' => '4', 'description' => 'View Banner', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'banner-edit', 'permission_category_id' => '4', 'description' => 'Edit Banner', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'banner-delete', 'permission_category_id' => '4', 'description' => 'Delete Banner', 'guard_name' => 'web', 'crud' => 'delete'),
            array('name' => 'banner-list', 'permission_category_id' => '4', 'description' => 'View Banners', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'banner-create', 'permission_category_id' => '4', 'description' => 'Create Banner', 'guard_name' => 'web', 'crud' => 'create'),

            array('name' => 'user-list', 'permission_category_id' => '3', 'description' => 'View Users', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'user-create', 'permission_category_id' => '3', 'description' => 'Create new Users', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'user-show', 'permission_category_id' => '3', 'description' => 'Show  Users', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'user-edit', 'permission_category_id' => '3', 'description' => 'Edit Users', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'user-delete', 'permission_category_id' => '3', 'description' => 'Delete Users', 'guard_name' => 'web', 'crud' => 'delete'),
            array('name' => 'user-approve', 'permission_category_id' => '3', 'description' => 'Approve Users', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'user-list', 'permission_category_id' => '3', 'description' => 'View Users', 'guard_name' => 'web', 'crud' => 'view'),

            array('name' => 'settings-view', 'permission_category_id' => '16', 'description' => 'View Application Settings', 'guard_name' => 'web', 'crud' => 'view'),

            // array('name' => 'dashboard-show', 'permission_category_id' => '5', 'description' => 'View Dashboard', 'guard_name' => 'web', 'crud' => 'read'),

            array('name' => 'role-list', 'permission_category_id' => '19', 'description' => 'View Roles', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'role-show', 'permission_category_id' => '19', 'description' => 'Show Roles menu ', 'guard_name' => 'web', 'crud' => 'show'),
            array('name' => 'role-create', 'permission_category_id' => '19', 'description' => 'Create Roles', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'role-edit', 'permission_category_id' => '19', 'description' => 'Edit Roles', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'role-delete', 'permission_category_id' => '19', 'description' => 'Delete Roles', 'guard_name' => 'web', 'crud' => 'delete'),

            // array('name' => 'category-list', 'permission_category_id' => '9', 'description' => 'View Cause Categories', 'guard_name' => 'web', 'crud' => 'view'),
            // array('name' => 'category-show', 'permission_category_id' => '9', 'description' => 'Show Cause Category menu ', 'guard_name' => 'web', 'crud' => 'show'),
            // array('name' => 'category-create', 'permission_category_id' => '9', 'description' => 'Create Cause Category', 'guard_name' => 'web', 'crud' => 'create'),
            // array('name' => 'category-edit', 'permission_category_id' => '9', 'description' => 'Edit Cause Category', 'guard_name' => 'web', 'crud' => 'edit'),
            // array('name' => 'category-delete', 'permission_category_id' => '9', 'description' => 'Delete Cause Category', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'donation-list', 'permission_category_id' => '6', 'description' => 'View Donations', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'donation-create', 'permission_category_id' => '6', 'description' => 'Create Donations', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'donation-show', 'permission_category_id' => '6', 'description' => 'Show Donations', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'donation-edit', 'permission_category_id' => '6', 'description' => 'Edit Donations', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'donation-delete', 'permission_category_id' => '6', 'description' => 'Delete Donations', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'policy-list', 'permission_category_id' => '7', 'description' => 'View Policies', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'policy-create', 'permission_category_id' => '7', 'description' => 'Create Policies', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'policy-show', 'permission_category_id' => '7', 'description' => 'Show Policies', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'policy-edit', 'permission_category_id' => '7', 'description' => 'Edit Policy', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'policy-delete', 'permission_category_id' => '7', 'description' => 'Delete Policies', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'volunteer-list', 'permission_category_id' => '8', 'description' => 'View Volunteers', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'volunteer-create', 'permission_category_id' => '8', 'description' => 'Create Volunteers', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'volunteer-show', 'permission_category_id' => '8', 'description' => 'Show Volunteers', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'volunteer-edit', 'permission_category_id' => '8', 'description' => 'Edit Volunteer', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'volunteer-delete', 'permission_category_id' => '8', 'description' => 'Delete Volunteers', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'faqs-list', 'permission_category_id' => '9', 'description' => 'View FAQS', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'faqs-create', 'permission_category_id' => '9', 'description' => 'Create FAQS', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'faqs-show', 'permission_category_id' => '9', 'description' => 'Show FAQS', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'faqs-edit', 'permission_category_id' => '9', 'description' => 'Edit FAQS', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'faqs-delete', 'permission_category_id' => '9', 'description' => 'Delete FAQS', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'event-category-list', 'permission_category_id' => '11', 'description' => 'View Event Categories', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'event-category-create', 'permission_category_id' => '11', 'description' => 'Create Event Categories', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'event-category-show', 'permission_category_id' => '11', 'description' => 'Show Event Categories', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'event-category-edit', 'permission_category_id' => '11', 'description' => 'Edit Event Category', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'event-category-delete', 'permission_category_id' => '11', 'description' => 'Delete Event Categories', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'event-list', 'permission_category_id' => '10', 'description' => 'View Events', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'event-create', 'permission_category_id' => '10', 'description' => 'Create Events', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'event-show', 'permission_category_id' => '10', 'description' => 'Show Events', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'event-edit', 'permission_category_id' => '10', 'description' => 'Edit Event', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'event-delete', 'permission_category_id' => '10', 'description' => 'Delete Events', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'album-list', 'permission_category_id' => '12', 'description' => 'View Album', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'album-create', 'permission_category_id' => '12', 'description' => 'Create Album', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'album-show', 'permission_category_id' => '12', 'description' => 'Show Album', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'album-edit', 'permission_category_id' => '12', 'description' => 'Edit Album', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'album-delete', 'permission_category_id' => '12', 'description' => 'Delete Album', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'video-list', 'permission_category_id' => '13', 'description' => 'View Videos', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'video-create', 'permission_category_id' => '13', 'description' => 'Create Videos', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'video-show', 'permission_category_id' => '13', 'description' => 'Show Videos', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'video-edit', 'permission_category_id' => '13', 'description' => 'Edit Video', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'video-delete', 'permission_category_id' => '13', 'description' => 'Delete Videos', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'inquires-list', 'permission_category_id' => '14', 'description' => 'View Inquires', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'inquires-create', 'permission_category_id' => '14', 'description' => 'Create Inquires', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'inquires-show', 'permission_category_id' => '14', 'description' => 'Show Inquires', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'inquires-edit', 'permission_category_id' => '14', 'description' => 'Edit Inquires', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'inquires-delete', 'permission_category_id' => '14', 'description' => 'Delete Inquires', 'guard_name' => 'web', 'crud' => 'delete'),
            array('name' => 'inquires-pdf', 'permission_category_id' => '14', 'description' => 'Download PDF', 'guard_name' => 'web', 'crud' => 'view'),

            array('name' => 'program-list', 'permission_category_id' => '15', 'description' => 'View Programs', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'program-create', 'permission_category_id' => '15', 'description' => 'Create Programs', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'program-show', 'permission_category_id' => '15', 'description' => 'Show Programs', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'program-edit', 'permission_category_id' => '15', 'description' => 'Edit Program', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'program-delete', 'permission_category_id' => '15', 'description' => 'Delete Programs', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'team-list', 'permission_category_id' => '17', 'description' => 'View Team', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'team-create', 'permission_category_id' => '17', 'description' => 'Create Team', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'team-show', 'permission_category_id' => '17', 'description' => 'Show Team', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'team-edit', 'permission_category_id' => '17', 'description' => 'Edit Team', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'team-delete', 'permission_category_id' => '17', 'description' => 'Delete Team', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'partner-list', 'permission_category_id' => '18', 'description' => 'View Policies', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'partner-create', 'permission_category_id' => '18', 'description' => 'Create Policies', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'partner-show', 'permission_category_id' => '18', 'description' => 'Show Policies', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'partner-edit', 'permission_category_id' => '18', 'description' => 'Edit Policy', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'partner-delete', 'permission_category_id' => '18', 'description' => 'Delete Policies', 'guard_name' => 'web', 'crud' => 'delete'),

            array('name' => 'policy-list', 'permission_category_id' => '6', 'description' => 'View Policies', 'guard_name' => 'web', 'crud' => 'view'),
            array('name' => 'policy-create', 'permission_category_id' => '6', 'description' => 'Create Policies', 'guard_name' => 'web', 'crud' => 'create'),
            array('name' => 'policy-show', 'permission_category_id' => '6', 'description' => 'Show Policies', 'guard_name' => 'web', 'crud' => 'read'),
            array('name' => 'policy-edit', 'permission_category_id' => '6', 'description' => 'Edit Policy', 'guard_name' => 'web', 'crud' => 'edit'),
            array('name' => 'policy-delete', 'permission_category_id' => '6', 'description' => 'Delete Policies', 'guard_name' => 'web', 'crud' => 'delete'),

        );

        foreach ($permissions as $permission) {
            $newPermissions = Permission::firstOrCreate([
                'name' => $permission['name'],
                'description' => $permission['description'],
                'permission_category_id' => $permission['permission_category_id'],
                'guard_name' => $permission['guard_name'],
                'crud' => $permission['crud']
            ]);
            //assign all new permissions to admin role
            //  check if permission already assigned to admin role
            if (DB::table('role_has_permissions')->where('permission_id', $newPermissions->id)->where('role_id', 1)->exists()) {
                continue;
            }
            DB::table('role_has_permissions')->insert([
                'permission_id' => $newPermissions->id,
                'role_id' => 1
            ]);
        }
    }
}
