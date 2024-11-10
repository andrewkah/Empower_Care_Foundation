<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Services\VideoService;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct(private VideoService $videoService)
    {
        
    }

    public function index(){
        $data = $this->videoService->getAllVideos();
        return view('backend.pages.videos.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.videos.create');
    }

    public function store(VideoRequest $request){
        $videos = $this->videoService->storeVideo($request);
        if ($videos) return redirect()->route('videos.index')->with('success', "Video created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $video = $this->videoService->getSingleVideo($id);
        return view('backend.pages.videos.create', compact('video'));
    }

    public function update($id, VideoRequest $request){
        $video = $this->videoService->updateVideo($id, $request);
        if($video) return redirect()->route('videos.index')->with('success', 'Video updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $video = $this->videoService->deleteVideo($id);
        if($video) return redirect()->route('videos.index')->with('success', 'Video deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
