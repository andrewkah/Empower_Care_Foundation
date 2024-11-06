<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\EventCategoryRequest;
use App\Models\EventCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class EventCategoryService{

    public function __construct(private EventCategory $eventCategory)
    {

    }
    // create eventCategory
    public function storeEventCategory(EventCategoryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::random(10);
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
        $data = $eventCategory->validated();
        $data['updated_by'] = Auth::id();
        return $this->eventCategory->findOrFail($id)->update($data);

    }
    // delete eventCategory
    public function deleteEventCategory($id)
    {
        return $this->eventCategory->destroy($id);
    }
    public function getAllEventCategorysOrderByCreatedAt(){
        $data= $this->eventCategory->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $eventCategory){
                $eventCategory->date = Carbon::parse($eventCategory->created_at)->format('F j, h:i A');
                $eventCategory->time = Carbon::parse($eventCategory->created_at)->format('M, Y');
                $eventCategory->day = Carbon::parse($eventCategory->created_at)->format('d');
            }
        }
        return $data;
    }
    public function getEventCategoryBySlug($id){
        $data = $this->eventCategory->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>