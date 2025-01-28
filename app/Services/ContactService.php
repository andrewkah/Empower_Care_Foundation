<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;
class ContactService
{

    public function __construct(private Contact $contact) {}
    // create contact
    public function storeContact(ContactRequest $request)
    {
        $score = RecaptchaV3::verify($request->get('g-recaptcha-response'), 'store_contact-us');
            if($score > 0.7) {
                // go
                $data = $request->validated();
                return $this->contact->create($data);
            } elseif($score > 0.3) {
                // require additional email verification
            } else {
                return abort(400, 'You are most likely a bot');
            }       
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
    public function getContactBySlug($id){
        $data = $this->contact->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}
