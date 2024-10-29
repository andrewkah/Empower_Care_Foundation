<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\VideoRequest;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
class VideoService{

    public function __construct(private Video $video)
    {

    }
    // create video
    public function storeVideo(VideoRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
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
        return $this->video->findOrFail($id)->update($video->validated());

    }
    // delete video
    public function deleteVideo($id)
    {
        return $this->video->destroy($id);
    }
}

?>