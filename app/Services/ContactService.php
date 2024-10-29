<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactService
{

    public function __construct(private Contact $contact) {}
    // create contact
    public function storeContact(ContactRequest $request)
    {
        $data = $request->validated();
        return $this->contact->create($data);
    }
    // get all contacts
    public function getAllContacts()
    {
        return $this->contact->all();
    }
    // get contact by id
    public function getSingleContact($id)
    {
        return $this->contact->where('id', $id)->first();
    }
    // update contact
    public function updateContact($id, ContactRequest $contact)
    {
        return $this->contact->findOrFail($id)->update($contact->validated());
    }
    // delete contact
    public function deleteContact($id)
    {
        return $this->contact->destroy($id);
    }

    public function getMessages()
    {
        return $this->contact->select('message')->get();
    }
}
