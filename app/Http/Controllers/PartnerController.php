<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Services\PartnerService;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function __construct(private PartnerService $partnerService)
    {
        
    }

    public function index(){
        $data = $this->partnerService->getAllPartners();
        return view('backend.pages.partners.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.partners.create');
    }

    public function store(PartnerRequest $request){
        $partners = $this->partnerService->storePartner($request);
        if ($partners) return redirect()->route('partners.index')->with('success', "Partner created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $partner = $this->partnerService->getSinglePartner($id);
        return view('backend.pages.partners.create', compact('partner'));
    }

    public function update($id, PartnerRequest $request){
        $partner = $this->partnerService->updatePartner($id, $request);
        if($partner) return redirect()->route('partners.index')->with('success', 'Partner updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $partner = $this->partnerService->deletePartner($id);
        if($partner) return redirect()->route('partners.index')->with('success', 'Partner deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
