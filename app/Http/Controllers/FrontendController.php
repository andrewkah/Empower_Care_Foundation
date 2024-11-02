<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CauseService;
use App\Services\ProgramService;

class FrontendController extends Controller
{
    //
    public function __construct(private CauseService $causeService, private ProgramService $programService)
    {
        
    }
    public function programs(){
        $programs = $this->programService->getAllProgramsOrderByCreatedAt();
        return view('website.pages.programs',compact('programs'));
    }
    public function program_details($id){
        $program = $this->programService->getProgramBySlug($id);
        return view('website.pages.program_details', compact('program'));
    }
    public function causes(){
        $causes = $this->causeService->getAllCausesOrderByCreatedAt();
        return view('website.pages.cause', compact('causes'));
    }
}
