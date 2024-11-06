<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EventService{

    public function __construct(private Event $event)
    {

    }
    // create event
    public function storeEvent(EventRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('events'); else $path=null;
        $data['photo_path'] = $path;
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->event->create($data);
    }
    // get all events
    public function getAllEvents()
    {
        return $this->event->all();
    }
    // get event by id
    public function getSingleEvent($id)
    {
        return $this->event->where('id', $id)->first();
    }
    // update event
    public function updateEvent($id, EventRequest $event)
    {
        $path = $this->getSingleEvent($id)->photo;
        if ($event->hasFile('photo')) $path = $event->file('photo')->store('events');
        $data = $event->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->event->findOrFail($id)->update($data);
    }
    // delete event
    public function deleteEvent($id)
    {
        return $this->event->destroy($id);
    }

    public function getAllEventsOrderByCreatedAt(){
        $data= $this->event->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $event){
                $event->date = Carbon::parse($event->created_at)->format('F j, h:i A');
                $event->time = Carbon::parse($event->created_at)->format('M, Y');
                $event->day = Carbon::parse($event->created_at)->format('d');
            }
        }
        return $data;
    }

    public function getEventBySlug($id){
        $data = $this->event->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>