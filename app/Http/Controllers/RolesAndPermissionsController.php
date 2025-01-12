<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Services\RoleService;

class RolesAndPermissionsController extends Controller
{

    public function __construct(private RoleService $role_service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->role_service->getRoles();
        return view('backend.pages.roles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission_categories = $this->role_service->getPermissionCategories();
        return view('backend.pages.roles.create', compact('permission_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $role_request)
    {
        $role = $this->role_service->createRole($role_request->validated());

        return redirect()->route('roles.edit', $role->id)->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = $this->role_service->getRole($id); 
        $permission_categories = $this->role_service->getPermissionCategories(); 
        return view('backend.pages.roles.edit', compact('role', 'permission_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $role_request, string $role_id)
    {
        $this->role_service->updateRole($role_id, $role_request->validated());

        return redirect()->route('roles.edit', $role_id)->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->role_service->destroyRole($id);

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }
}