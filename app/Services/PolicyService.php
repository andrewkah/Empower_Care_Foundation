<?php

namespace App\Services;

use App\Models\Policy;
use Illuminate\Support\Str;
use App\Http\Requests\StorePolicyRequest;
use App\Http\Requests\UpdatePolicyRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PolicyService
{
    public function __construct(private Policy $policy)
    {
    }
    public function getAllPolicies()
    {
        return $this->policy->all();
    }
    public function getSinglePolicy($id)
    {
        return $this->policy->findOrFail($id);
    }
    public function storePolicy(StorePolicyRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('file')) $path = $request->file('file')->store('policies'); else $path = null;
        $data['file'] = $path;
        $data['created_by'] = Auth::id();
        return $this->policy->create($data);
    }
    public function updatePolicy(UpdatePolicyRequest $policy, $id)
    {
        $path = $this->getSinglePolicy($id)->file;
        if ($policy->hasFile('file')) $path = $policy->file('file')->store('policies');
        $data = $policy->validated();
        $data['file'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->policy->findOrFail($id)->update($data);
    }
    public function deletePolicy($id)
    {
        return $this->policy->destroy($id);
    }
    public function getAllPoliciesOrderByCreatedAt(){
        $data = $this->policy->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $policy){
                $policy->date = Carbon::parse($policy->created_at)->format('F j, h:i A');
                $policy->time = Carbon::parse($policy->created_at)->format('M, Y');
                $policy->day = Carbon::parse($policy->created_at)->format('d');
            }
        }
        return $data;
    }
}
?>