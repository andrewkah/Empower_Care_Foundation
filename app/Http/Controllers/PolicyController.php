<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use App\Http\Requests\StorePolicyRequest;
use App\Http\Requests\UpdatePolicyRequest;
use App\Services\PolicyService;

class PolicyController extends Controller
{
    public function __construct(private PolicyService $policyService)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policies = $this->policyService->getAllPoliciesOrderByCreatedAt();
        return view('backend.pages.policies.index', compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.policies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePolicyRequest $request)
    {
        $policy = $this->policyService->storePolicy($request);
        if ($policy) return redirect()->route('policies.index')->with('success', "Policy created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    /**
     * Display the specified resource.
     */
    public function show(Policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $policy = $this->policyService->getSinglePolicy($id);
        return view('backend.pages.policies.create', compact('policy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePolicyRequest $request, $id)
    {
        $policy = $this->policyService->updatePolicy($request, $id);
        if($policy) return redirect()->route('policies.index')->with('success', 'Policy updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $policy = $this->policyService->deletePolicy($id);
        if($policy) return redirect()->route('policies.index')->with('success', 'Policy deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
