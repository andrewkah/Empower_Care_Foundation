<?php

namespace App\Services;


use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AlbumService{

    public function __construct(private Album $album)
    {

    }

    public function updateAlbumPhotos (Request $request,$id){
        $record = Album::find($id);

        // Handle existing images and captions
        $existingImages = $request->input('existing_images', []);
        $existingCaptions = $request->input('captions', []);
    
        // Handle newly uploaded images and captions
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $index => $file) {
                $path = $file->store('album');
                $existingImages[] = $path; // Add new image path to existing array
                $existingCaptions[] = $request->input('new_captions')[$index]; // Add corresponding new caption
            }
        }
    
        // Store updated images and captions as JSON
        $record->photos = json_encode($existingImages);
        $record->captions = json_encode($existingCaptions); // Assuming a captions field exists
        $record->save();
        return $record;
    }
    // create album
    public function storeAlbum(AlbumRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('cover_photo')) {
            $cover_path = $request->file('cover_photo')->store('album/cover_photo');
        } else $cover_path = null;
        $data['cover_photo'] = $cover_path;
        $data['created_by'] = Auth::id();
        return $this->album->create($data);
    }
    // get all albums
    public function getAllAlbums()
    {
        return $this->album->all();
    }
    // get album by id
    public function getSingleAlbum($id)
    {
        $data = $this->album->findOrFail($id);
        $data->photos = json_decode($data->photos,true);
        $data->captions = json_decode($data->captions,true);
        return $data;
    }
    // update album
    public function updateAlbum($id, AlbumRequest $album)
    {
        $path = $this->getSingleAlbum($id)->photo;
        if ($album->hasFile('cover_photo')) $path = $album->file('cover_photo')->store('album/cover_photo');
        $data = $album->validated();
        $data['cover_photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->album->findOrFail($id)->update($data);

    }
    // delete album
    public function deleteAlbum($id)
    {
        return $this->album->destroy($id);
    }

    public function getAllAlbumOrderByCreatedAt(){
        $data = $this->album->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $album){
                $album->date = Carbon::parse($album->created_at)->format('F j, h:i A');
                $album->time = Carbon::parse($album->created_at)->format('M, Y');
                $album->day = Carbon::parse($album->created_at)->format('d');
            }
        }
        return $data;
    }

    public function getalbumBySlug($id){
        $data = $this->album->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
            $data->photos = json_decode($data->photos,true);
            $data->captions = json_decode($data->captions,true);
        }
        return $data;
    }
}

?>