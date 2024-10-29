<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
class BannerService{

    public function __construct(private Banner $banner)
    {

    }
    // create banner
    public function storeBanner(BannerRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('public/categories'); else $path=null;
        $data['photo_path'] = $path;
        $data['slug'] = Str::slug($data['title']);
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
        return $this->banner->findOrFail($id)->update($banner->validated());

    }
    // delete banner
    public function deleteBanner($id)
    {
        return $this->banner->destroy($id);
    }
}

?>