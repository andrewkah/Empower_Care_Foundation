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
    
    public function store(AlbumRequest $albumRequest){
        $album = $this->albumService->storeAlbum($albumRequest);
        if($album) return redirect()->route('albums.index')->with('success', 'Album created successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function edit($id) {
        $data = $this->albumService->getSingleAlbum($id);
        return view('backend.pages.albums.edit', compact('data'));
    }

    public function update($id, AlbumRequest $albumRequest) {
        $album = $this->albumService->updateAlbum($id, $albumRequest);
        if($album) return redirect()->route('albums.index')->with('success', 'Album updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id) {
        $album = $this->albumService->deleteAlbum($id);
        if($album) return redirect()->route('albums.index')->with('success', 'Album deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
