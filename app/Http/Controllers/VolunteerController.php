<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationRequest;
use App\Services\DonationService;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function __construct(private DonationService $donationService)
    {
        
    }

    public function index(){
        $data = $this->donationService->getAllVolunteers();
        return view('backend.pages.volunteer.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.donations.create');
    }

    public function store(DonationRequest $request){
        $donations = $this->donationService->storeDonation($request);
        if ($donations) return redirect()->route('donations.index')->with('success', "Donation created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $donation = $this->donationService->getSingleDonation($id);
        return view('backend.pages.donations.create', compact('donation'));
    }

    public function update($id, DonationRequest $request){
        $donation = $this->donationService->updateDonation($id, $request);
        if($donation) return redirect()->route('donations.index')->with('success', 'Donation updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $donation = $this->donationService->deleteVolunteer($id);
        if($donation) return redirect()->route('volunteers.index')->with('success', 'Volunteer Request deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
