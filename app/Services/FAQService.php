<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\FAQRequest;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
class FAQService{

    public function __construct(private FAQ $faq)
    {

    }
    // create FAQ
    public function storeFAQ(FAQRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
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
}

?>