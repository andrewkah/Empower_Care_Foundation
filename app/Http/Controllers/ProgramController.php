<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramRequest;
use App\Services\ProgramService;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function __construct(private ProgramService $programService)
    {
        
    }

    public function index(){
        $data = $this->programService->getAllPrograms();
        return view('backend.pages.programs.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.programs.create');
    }

    public function store(ProgramRequest $request){
        $programs = $this->programService->storeProgram($request);
        if ($programs) return redirect()->route('programs.index')->with('success', "Program created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $program = $this->programService->getSingleProgram($id);
        return view('backend.pages.programs.edit', compact('program'));
    }

    public function update($id, ProgramRequest $request){
        $program = $this->programService->updateProgram($id, $request);
        if($program) return redirect()->route('programs.index')->with('success', 'Program updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $program = $this->programService->deleteProgram($id);
        if($program) return redirect()->route('programs.index')->with('success', 'Program deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
