<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventCategoryRequest;
use App\Services\EventCategoryService;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function __construct(private EventCategoryService $eventCategoryService)
    {
        
    }

    public function index(){
        $data = $this->eventCategoryService->getAllEventCategorys();
        return view('backend.pages.events-categories.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.events-categories.create');
    }

    public function store(EventCategoryRequest $request){
        $eventCategorys = $this->eventCategoryService->storeEventCategory($request);
        if ($eventCategorys) return redirect()->route('event-categories.index')->with('success', "EventCategory created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $eventCategory = $this->eventCategoryService->getSingleEventCategory($id);
        return view('backend.pages.events-categories.create', compact('eventCategory'));
    }

    public function update($id, EventCategoryRequest $request){
        $eventCategory = $this->eventCategoryService->updateEventCategory($id, $request);
        if($eventCategory) return redirect()->route('event-categories.index')->with('success', 'EventCategory updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $eventCategory = $this->eventCategoryService->deleteEventCategory($id);
        if($eventCategory) return redirect()->route('event-categories.index')->with('success', 'EventCategory deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
