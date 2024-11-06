<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class PartnerService{

    public function __construct(private Partner $partner)
    {

    }
    // create partner
    public function storePartner(PartnerRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('partners'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->partner->create($data);
    }
    // get all partners
    public function getAllPartners()
    {
        return $this->partner->all();
    }
    // get partner by id
    public function getSinglePartner($id)
    {
        return $this->partner->findOrFail($id);
    }
    // update partner
    public function updatePartner($id, PartnerRequest $partner)
    {
        $path = $this->getSinglePartner($id)->photo;
        if ($partner->hasFile('photo')) $path = $partner->file('photo')->store('partners');
        $data = $partner->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->partner->findOrFail($id)->update($data);

    }
    // delete partner
    public function deletePartner($id)
    {
        return $this->partner->destroy($id);
    }
    public function getAllPartnersOrderByCreatedAt(){
        $data = $this->partner->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $partner){
                $partner->date = Carbon::parse($partner->created_at)->format('F j, h:i A');
                $partner->time = Carbon::parse($partner->created_at)->format('M, Y');
                $partner->day = Carbon::parse($partner->created_at)->format('d');
            }
        }
        return $data;
    }
    public function getProgramBySlug($id){
        $data = $this->partner->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>