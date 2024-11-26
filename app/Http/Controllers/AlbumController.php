<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Services\AlbumService;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct(protected AlbumService $albumService) {}

    public function index() {
        $data = $this->albumService->getAllAlbums();
        return view('backend.pages.albums.index', compact('data'));
    }
    
    public function create() {
        return view('backend.pages.albums.create');
    }
    public function show($id)
    {
        $album= $this->albumService->getSingleAlbum($id);
        return view('backend.pages.albums.show',compact('album'));
    }
    
    public function store(AlbumRequest $albumRequest){
        $album = $this->albumService->storeAlbum($albumRequest);
        if($album) return redirect()->route('album.index')->with('success', 'Album created successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function edit($id) {
        $album = $this->albumService->getSingleAlbum($id);
        return view('backend.pages.albums.create', compact('album'));
    }

    public function update_album(Request $request,$id){
        
        $album = $this->albumService->updateAlbumPhotos($request, $id);
        if ($album) {
            return redirect()->route('album.show', $id)->with('success', "Album Photos Successfully updated");
        }
        return redirect()->back()->with('error', 'Something went wrong');
      }
    public function update($id, AlbumRequest $albumRequest) {
        $album = $this->albumService->updateAlbum($id, $albumRequest);
        if($album) return redirect()->route('album.index')->with('success', 'Album updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id) {
        $album = $this->albumService->deleteAlbum($id);
        if($album) return redirect()->route('album.index')->with('success', 'Album deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
