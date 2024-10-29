<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
class EventService{

    public function __construct(private Event $event)
    {

    }
    // create event
    public function storeEvent(EventRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('public/categories'); else $path=null;
        $data['photo_path'] = $path;
        $data['slug'] = Str::slug($data['title']);
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
        return $this->event->findOrFail($id)->update($event->validated());

    }
    // delete event
    public function deleteEvent($id)
    {
        return $this->event->destroy($id);
    }
}

?>