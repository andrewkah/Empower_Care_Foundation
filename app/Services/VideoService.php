<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class VideoService{

    public function __construct(private Video $video)
    {

    }
    // create video
    public function storeVideo(VideoRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->video->create($data);
    }
    // get all videos
    public function getAllVideos()
    {
        return $this->video->all();
    }
    // get video by id
    public function getSingleVideo($id)
    {
        return $this->video->where('id', $id)->first();
    }
    // update video
    public function updateVideo($id, VideoRequest $video)
    {
        $data = $video->validated();
        $data['updated_by'] = Auth::id();
        return $this->video->findOrFail($id)->update($data);
    }
    // delete video
    public function deleteVideo($id)
    {
        return $this->video->destroy($id);
    }

    public function getAllVideosOrderByCreatedAt(){
        $data = $this->video->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $video){
                $video->date = Carbon::parse($video->created_at)->format('F j, h:i A');
                $video->time = Carbon::parse($video->created_at)->format('M, Y');
                $video->day = Carbon::parse($video->created_at)->format('d');
            }
        }
        return $data;
    }
    public function getVideoBySlug($id){
        $data = $this->video->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>