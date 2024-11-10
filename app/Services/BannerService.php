<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class BannerService{

    public function __construct(private Banner $banner)
    {

    }
    // create banner
    public function storeBanner(BannerRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('banners'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->banner->create($data);
    }
    // get all banners
    public function getAllBanners()
    {
        return $this->banner->all();
    }
    // get banner by id
    public function getSingleBanner($id)
    {
        return $this->banner->where('id', $id)->first();
    }
    // update banner
    public function updateBanner($id, BannerRequest $banner)
    {
        $path = $this->banner->findOrFail($id)->photo;
        if ($banner->hasFile('photo')) $path = $banner->file('photo')->store('banners');
        $data = $banner->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->banner->findOrFail($id)->update($data);
    }
    // delete banner
    public function deleteBanner($id)
    {
        return $this->banner->destroy($id);
    }

    public function getAllBannersOrderByCreatedAt(){
        $data= $this->banner->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $banner){
                $banner->date = Carbon::parse($banner->created_at)->format('F j, h:i A');
                $banner->time = Carbon::parse($banner->created_at)->format('M, Y');
                $banner->day = Carbon::parse($banner->created_at)->format('d');
            }
        }
        return $data;
    }
    public function getBannerBySlug($id){
        $data = $this->banner->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>