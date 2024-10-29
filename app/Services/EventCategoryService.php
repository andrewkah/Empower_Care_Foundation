<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\EventCategoryRequest;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Auth;
class EventCategoryService{

    public function __construct(private EventCategory $eventCategory)
    {

    }
    // create eventCategory
    public function storeEventCategory(EventCategoryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $data['created_by'] = Auth::id();
        return $this->eventCategory->create($data);
    }
    // get all eventCategorys
    public function getAllEventCategorys()
    {
        return $this->eventCategory->all();
    }
    // get eventCategory by id
    public function getSingleEventCategory($id)
    {
        return $this->eventCategory->where('id', $id)->first();
    }
    // update eventCategory
    public function updateEventCategory($id, EventCategoryRequest $eventCategory)
    {
        return $this->eventCategory->findOrFail($id)->update($eventCategory->validated());

    }
    // delete eventCategory
    public function deleteEventCategory($id)
    {
        return $this->eventCategory->destroy($id);
    }
}

?>