<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProgramService{

    public function __construct(private Program $p)
    {

    }
    // create p
    public function storeProgram(ProgramRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('programs'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::random(10);
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
        $data= $this->p->findOrFail($id);
        $data->other_photos = json_decode($data->other_photos,true);
        $data->captions = json_decode($data->captions,true);
        return $data;
    }
    // update p
    public function updateProgram($id, ProgramRequest $p)
    {
        
        $path = $this->getSingleProgram($id)->photo;
        if ($p->hasFile('photo')) $path = $p->file('photo')->store('programs');
        $data = $p->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->p->findOrFail($id)->update($data);

    }
    // delete p
    public function deleteProgram($id)
    {
        return $this->p->destroy($id);
    }
    public function getAllProgramsOrderByCreatedAt(){
        $data= $this->p->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $program){
                $program->date = Carbon::parse($program->created_at)->format('F j, h:i A');
                $program->time = Carbon::parse($program->created_at)->format('M, Y');
                $program->day = Carbon::parse($program->created_at)->format('d');
            }
        }
        return $data;
    }
    public function getProgramBySlug($id){
        $data = $this->p->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
            $data->other_photos = json_decode($data->other_photos,true);
            $data->captions = json_decode($data->captions,true);
        }
        return $data;
    }
    public function updateProgramAlbum (Request $request,$id){
        $record = Program::find($id);

        // Handle existing images and captions
        $existingImages = $request->input('existing_images', []);
        $existingCaptions = $request->input('captions', []);
    
        // Handle newly uploaded images and captions
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $index => $file) {
                $path = $file->store('programs');
                $existingImages[] = $path; // Add new image path to existing array
                $existingCaptions[] = $request->input('new_captions')[$index]; // Add corresponding new caption
            }
        }
    
        // Store updated images and captions as JSON
        $record->other_photos = json_encode($existingImages);
        $record->captions = json_encode($existingCaptions); // Assuming a captions field exists
        $record->save();
        return $record;
    }

}

?>