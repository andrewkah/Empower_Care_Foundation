<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\CauseRequest;
use App\Models\Cause;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CauseService{

    public function __construct(private Cause $cause)
    {

    }
    // create cause
    public function storeCause(CauseRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('causes'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->cause->create($data);
    }
    // get all causes
    public function getAllCauses()
    {
        return $this->cause->all();
    }
    //get all causes order by created_at
    public function getAllCausesOrderByCreatedAt()
    {
        $data= $this->cause->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $cause){
                $cause->date = Carbon::parse($cause->created_at)->format('F j, h:i A');
                $cause->time = Carbon::parse($cause->created_at)->format('M, y');
                $cause->day = Carbon::parse($cause->created_at)->format('d');
            }
        }
        return $data;
    }
    // get cause by id
    public function getSingleCause($id)
    {
        return $this->cause->where('id', $id)->first();
    }
    // update cause
    public function updateCause($id, CauseRequest $cause)
    {
        $path = $this->getSingleCause($id)->photo;
        if ($cause->hasFile('photo')) $path = $cause->file('photo')->store('causes');
        $data = $cause->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->cause->findOrFail($id)->update($data);

    }
    // delete cause
    public function deleteCause($id)
    {
        return $this->cause->destroy($id);
    }
}

?>