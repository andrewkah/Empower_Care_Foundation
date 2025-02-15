<?php

namespace App\Http\Controllers;

use App\Http\Requests\CauseRequest;
use App\Services\CauseService;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    public function __construct(private CauseService $causeService)
    {
        
    }

    public function index(){
        $data = $this->causeService->getAllCauses();
        return view('backend.pages.causes.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.causes.create');
    }

    public function store(CauseRequest $request){
        $causes = $this->causeService->storeCause($request);
        if ($causes) return redirect()->route('impacts.index')->with('success', "Impact created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $cause = $this->causeService->getSingleCause($id);
        return view('backend.pages.causes.create', compact('cause'));
    }

    public function update($id, CauseRequest $request){
        $cause = $this->causeService->updateCause($id, $request);
        if($cause) return redirect()->route('impacts.index')->with('success', 'Impact updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $cause = $this->causeService->deleteCause($id);
        if($cause) return redirect()->route('impacts.index')->with('success', 'Impact deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
