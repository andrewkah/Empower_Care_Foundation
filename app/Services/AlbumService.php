<?php

namespace App\Services;


use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
class AlbumService{

    public function __construct(private Album $album)
    {

    }

    // Handle updating photos
    public function photoUpload($id, AlbumRequest $request){
        $record = Album::find($id);

    // Handle existing images and captions
    $existingImages = $request->input('existing_images', []);
    $existingCaptions = $request->input('captions', []);

    // Handle newly uploaded images and captions
    if ($request->hasFile('photos')) {
        foreach ($request->file('photos') as $index => $file) {
            $path = $file->store('public/images');
            $existingImages[] = $path; // Add new image path to existing array
            $existingCaptions[] = $request->input('captions')[$index]; // Add corresponding new caption
        }
    }

    // Store updated images and captions as JSON
    $record->photo = json_encode($existingImages);
    $record->captions = json_encode($existingCaptions); // Assuming a captions field exists
    $record->save();
    $request()->session()->flash('success','Album Photos Successfully updated');
    }
    // create album
    public function storeAlbum(AlbumRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('cover_photo')) {
            $cover_path = $request->file('cover_photo')->store('public/images');
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
        return $this->album->where('id', $id)->first();
    }
    // update album
    public function updateAlbum($id, AlbumRequest $album)
    {
        $album = $album->validated();

        return $this->album->findOrFail($id)->update();

    }
    // delete album
    public function deleteAlbum($id)
    {
        return $this->album->destroy($id);
    }

    public function getAllAlbumOrderByCreatedAt(){
        return $this->album->orderBy('created_at', 'desc')->get();
    }
}

?>