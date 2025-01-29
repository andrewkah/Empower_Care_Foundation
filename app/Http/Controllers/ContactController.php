<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ContactController extends Controller
{
    public function __construct(private ContactService $contactService) {}

    public function index()
    {
        $data = $this->contactService->getAllContacts();
        return view('backend.pages.inquires.index', compact('data'));
    }

    // public function create(){
    //     return view('backend.pages.contacts.create');
    // }

    public function store(ContactRequest $request)
    {
        $contacts = $this->contactService->storeContact($request);
        if ($contacts) return redirect()->route('contact.index')->with('success', "Contact created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    /**
     * Downloads a PDF report of all inquiries.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $inquiries = $this->contactService->getAllContacts();
        $pdf = PDF::loadView('backend.pages.inquires.contact_pdf', compact('inquiries'));
        return $pdf->download('contact.pdf');
    }

    // public function edit($id){
    //     $contact = $this->contactService->getSingleContact($id);
    //     return view('backend.pages.contacts.edit', compact('contact'));
    // }

    public function update($id, ContactRequest $request)
    {
        $contact = $this->contactService->updateContact($id, $request);
        if ($contact) return redirect()->route('contact.index')->with('success', 'Contact updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id)
    {
        $contact = $this->contactService->deleteContact($id);
        if ($contact) return redirect()->route('contact.index')->with('success', 'Contact deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    // public function contact_pdf()
    // {
    //     $inquiries = $this->contactService->getAllContacts();
    //     $pdf = PDF::loadView('backend.pages.inquires.contact_pdf', $inquiries);
    //     return $pdf->download('contact.pdf');
    // }
}
