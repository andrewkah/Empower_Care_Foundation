<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
class ProgramService{

    public function __construct(private Program $p)
    {

    }
    // create p
    public function storeProgram(ProgramRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('public/categories'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::slug($data['title']);
        $data['created_by'] = Auth::id();
        return $this->p->create($data);
    }
    // get all ps
    public function getAllPrograms()
    {
        return $this->p->all();
    }
    // get p by id
    public function getSingleProgram($id)
    {
        return $this->p->where('id', $id)->first();
    }
    // update p
    public function updateProgram($id, ProgramRequest $p)
    {
        return $this->p->findOrFail($id)->update($p->validated());

    }
    // delete p
    public function deleteProgram($id)
    {
        return $this->p->destroy($id);
    }
}

?>