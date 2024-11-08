<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Services\EventCategoryService;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(private EventService $eventService, private EventCategoryService $eventCategoryService)
    {
        
    }

    public function index(){
        $data= $this->eventService->getAllEvents();
        return view('backend.pages.events.index', compact('data'));
    }

    public function create(){
        $categories = $this->eventCategoryService->getAllEventCategorys();
        return view('backend.pages.events.create', compact('categories'));
    }

    public function store(EventRequest $request){
        $events = $this->eventService->storeEvent($request);
        if($events) return redirect()->route('events.index')->with('success', "Event created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $data = $this->eventService->getSingleEvent($id);
        $categories = $this->eventCategoryService->getAllEventCategorys();
        return view('backend.pages.events.edit', compact('data', 'categories'));
    }

    public function update($id, EventRequest $request){
        $event = $this->eventService->updateEvent($id, $request);
        if($event) return redirect()->route('events.index')->with('success', 'Event updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $event = $this->eventService->deleteEvent($id);
        if($event) return redirect()->route('events.index')->with('success', 'Event deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
