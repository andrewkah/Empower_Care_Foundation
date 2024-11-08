<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Services\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct(private BannerService $bannerService)
    {
        
    }

    public function index(){
        $data = $this->bannerService->getAllBanners();
        return view('backend.pages.banners.index', compact('data'));
    }
    public function create(){
        return view('backend.pages.banners.create');
    }
    public function store(BannerRequest $request){
        $banner = $this->bannerService->storeBanner($request);
        if($banner) return redirect()->route('banner.index')->with('success', 'Banner created successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
    public function edit($id){
        $banner = $this->bannerService->getSingleBanner($id);
        return view('backend.pages.banners.create', compact('banner'));
    }
    public function update($id, BannerRequest $request){
        $banner = $this->bannerService->updateBanner($id, $request);
        if($banner) return redirect()->route('banner.index')->with('success', 'Banner updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
    public function destroy($id){
        $banners = $this->bannerService->deleteBanner($id);
        if($banners) return redirect()->route('banner.index')->with('success', 'Banner deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
