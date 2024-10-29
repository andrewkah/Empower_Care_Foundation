<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(private EventService $eventService)
    {
        
    }

    public function index(){
        $data= $this->eventService->getAllEvents();
        return view('backend.pages.events.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.events.create');
    }

    public function store(EventRequest $request){
        $events = $this->eventService->storeEvent($request);
        if ($events) return redirect()->route('events.index')->with('success', "Event created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $event = $this->eventService->getSingleEvent($id);
        return view('backend.pages.events.edit', compact('event'));
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
