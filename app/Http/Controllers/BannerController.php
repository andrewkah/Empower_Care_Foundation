<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct(private BannerService $bannerService)
    {
        
    }

    public function index(){
        $banners = $this->bannerService->getAllBanners();
        return view('backend.dashboard.index', compact('banners'));
    }
}
