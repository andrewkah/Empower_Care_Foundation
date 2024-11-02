<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CauseService;
class FrontendController extends Controller
{
    //
    public function __construct(private CauseService $causeService)
    {
        
    }

    public function causes(){
        $causes = $this->causeService->getAllCausesOrderByCreatedAt();
        return view('website.pages.cause', compact('causes'));
    }
}
