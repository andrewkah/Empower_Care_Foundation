<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\DonationRequest;
use App\Http\Requests\VolunteerRequest;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Http\Request;
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
    public function storeVolunteer(VolunteerRequest $request){
        $data=$request->validated();
        $data['status']='pending';
        $new_volunteer= Volunteer::create($data);
        return $new_volunteer;
    }
    // get all donations
    public function getAllDonations()
    {
        return $this->donation->all();
    }
    public function getAllVolunteers()
    {
        return Volunteer::all();
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
    public function updateVolunteerStatus($id,Request $request){
        $volunteer=Volunteer::find($id);
        $volunteer->status=$request->status;
        $volunteer->save();
        return $volunteer;
    }
    public function deleteVolunteer($id){
        $volunteer=Volunteer::find($id);
        $volunteer->delete();
        return $volunteer;
    }
}

?>