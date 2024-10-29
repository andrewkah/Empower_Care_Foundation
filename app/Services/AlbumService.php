<?php

namespace App\Services;


use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
class AlbumService{

    public function __construct(private Album $album)
    {

    }
    // create album
    public function storeAlbum(AlbumRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('cover_photo') || $request->hasFile('photos')) {
            $cover_path = $request->file('cover_photo')->store('public/categories');
            $photo_path = $request->file('photos')->store('public/categories');
        } else 
        {$cover_path = null; $photo_path = null;};
        $data['cover_photo'] = $cover_path;
        $data['photos'] = $photo_path;
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
        return $this->album->findOrFail($id)->update($album->validated());

    }
    // delete album
    public function deleteAlbum($id)
    {
        return $this->album->destroy($id);
    }
}

?>