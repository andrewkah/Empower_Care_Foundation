<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
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
        return $this->partner->orderBy('created_at', 'desc')->get();
    }
}

?>