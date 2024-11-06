<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\FAQRequest;
use App\Models\FAQ;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class FAQService{

    public function __construct(private FAQ $faq)
    {

    }
    // create FAQ
    public function storeFAQ(FAQRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->faq->create($data);
    }
    // get all fAQs
    public function getAllFAQs()
    {
        return $this->faq->all();
    }
    // get fAQ by id
    public function getSingleFAQ($id)
    {
        return $this->faq->where('id', $id)->first();
    }
    // update fAQ
    public function updateFAQ($id, FAQRequest $fAQ)
    {
        return $this->faq->findOrFail($id)->update($fAQ->validated());

    }
    // delete fAQ
    public function deleteFAQ($id)
    {
        return $this->faq->destroy($id);
    }


    public function getAllFaqsOrderByCreatedAt(){
        $data= $this->faq->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $faq){
                $faq->date = Carbon::parse($faq->created_at)->format('F j, h:i A');
                $faq->time = Carbon::parse($faq->created_at)->format('M, Y');
                $faq->day = Carbon::parse($faq->created_at)->format('d');
            }
        }
        return $data;
    }

    public function getFAQBySlug($id){
        $data = $this->faq->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>