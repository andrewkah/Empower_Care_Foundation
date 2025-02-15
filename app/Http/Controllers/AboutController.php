<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;
use App\Services\AboutService;

class AboutController extends Controller
{
    //
    public function __construct(protected AboutService $aboutService)
    {
        
    }

    public function index()
    {
        $data = $this->aboutService->getAboutUs();
        return view('backend.pages.about.form', compact('data'));
    }
    public function store (AboutRequest $request)
    {
        $store = $this->aboutService->storeAboutUs($request);
        if ($store){
            return redirect()->route('aboutus.index');
        }
        return redirect()->route('aboutus.index');
    }
}
