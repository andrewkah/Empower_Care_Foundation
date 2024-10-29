<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\CauseRequest;
use App\Models\Cause;
use Illuminate\Support\Facades\Auth;
class CauseService{

    public function __construct(private Cause $cause)
    {

    }
    // create cause
    public function storeCause(CauseRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('public/categories'); else $path=null;
        $data['photo_path'] = $path;
        $data['slug'] = Str::slug($data['title']);
        $data['created_by'] = Auth::id();
        return $this->cause->create($data);
    }
    // get all causes
    public function getAllCauses()
    {
        return $this->cause->all();
    }
    // get cause by id
    public function getSingleCause($id)
    {
        return $this->cause->where('id', $id)->first();
    }
    // update cause
    public function updateCause($id, CauseRequest $cause)
    {
        return $this->cause->findOrFail($id)->update($cause->validated());

    }
    // delete cause
    public function deleteCause($id)
    {
        return $this->cause->destroy($id);
    }
}

?>