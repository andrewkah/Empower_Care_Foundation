<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\DonationRequest;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;
class DonationService{

    public function __construct(private Donation $donation)
    {

    }
    // create donation
    public function storeDonation(DonationRequest $request)
    {
        $data = $request->validated();
        $data['title'] = $data['firstname'] .' '.$data['lastname'];
        $data['slug'] = $data['email'];
        $data['description'] = $data['payment_method'];
        $data['photo'] = $data['amount'];
        $data['created_by'] = Auth::id();
        return $this->donation->create($data);
    }
    // get all donations
    public function getAllDonations()
    {
        return $this->donation->all();
    }
    // get donation by id
    public function getSingleDonation($id)
    {
        return $this->donation->where('id', $id)->first();
    }
    // update donation
    public function updateDonation($id, DonationRequest $donation)
    {
        return $this->donation->findOrFail($id)->update($donation->validated());

    }
    // delete donation
    public function deleteDonation($id)
    {
        return $this->donation->destroy($id);
    }
}

?>