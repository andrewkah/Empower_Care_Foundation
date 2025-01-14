<?php

namespace App\Services;

use App\Models\PermissionCategory;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class RoleService
{
    /**
     * Retrieve all roles from the database.
     * 
     */
    public function getRoles()
    {
        // Retrieve all roles from the database.
        return Role::latest()->get();
    }

    /**
     * Retrieve all the permission categories from the database.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPermissionCategories()
    {
        // Retrieve all the permission categories from the database.
        return PermissionCategory::with('permissions')->get();
    }

    /**
     * Create a new role with the given data.
     *
     * @param  array  $roleData
     * @return void
     */
    public function createRole(array $roleData): Role
    {
        // Retrieve the role name and permissions from the data.
        $role_name = $roleData['name'];
        $role_permissions = $roleData['permissions'];

        // Create a new role with the given name.
        $role = Role::create(['name' => $role_name]);

        // Convert permission IDs to names
        $permissions = Permission::whereIn('id', $role_permissions)->pluck('name');

        // Synchronize the role's permissions with the given permissions.
        $role->syncPermissions($permissions);

        return $role;
    }


    /**
     * Destroy a role by its ID.
     *
     * This function finds a role by its ID, detaches all associated permissions,
     * and then deletes the role.
     *
     * @param  int  $role_id  The ID of the role to be destroyed.
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If no role is found with the given ID.
     * @return void
     */
    public function destroyRole($role_id)
    { 
        DB::transaction(function () use ($role_id) {
            // Find the role by its ID. Throw an exception if not found.
            $role = Role::findOrFail($role_id);

            // Detach all permissions from the role. 
            $role->syncPermissions([]);

            // Delete the role. 
            $role->delete();
        });

    }


    /**
     * Retrieve a role by its ID.
     *
     * @param int $role_id The ID of the role to be retrieved.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If no role is found with the given ID.
     *
     * @return \Spatie\Permission\Models\Role The retrieved role.
     */
    public function getRole($role_id): Role
    {
        // Retrieve a role by its ID. Throw an exception if not found.
        return Role::findOrFail($role_id);
    }

    public function updateRole(int $role_id, array $roleData): Role
    {
        // Retrieve a role by its ID. Throw an exception if not found.
        $role = Role::findOrFail($role_id);

        // Retrieve the role name and permissions from the data.
        $role_name = $roleData['name'];
        $role_permissions = $roleData['permissions'];

        // Update the role's name.
        $role->name = $role_name;

        //save
        $role->save();
        // Convert permission IDs to names
        $permissions = Permission::whereIn('id', $role_permissions)->pluck('name');

        // Synchronize the role's permissions with the given permissions.
        $role->syncPermissions($permissions);

        return $role;
    }
}