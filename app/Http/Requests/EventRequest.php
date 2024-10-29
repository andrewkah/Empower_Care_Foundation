<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'description' => 'string|max:350',
            'event_date' => 'required|date',
            'event_time' => 'required|regex:/^([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/', // 00:00:00
            'organizer' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/',
            'webite' => 'required|url',
            'sponsor' => 'required|string|max:255',
            'event_speaker' => 'required|string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.string' => 'The title should be a valid text',
            'summary.required' => 'Summary is required',
            'description.string' => 'Description should be a valid text',
            'event_date.required' => 'The date is required',
            'event_date.date' => 'Date should be a valid date',
            'event_time.required' => 'The time is required',
            'event_time.regex' => 'Event time should be in the format HH:MM:SS',
            'organizer.required' => 'The organizer is required',
            'location.required' => 'Location is required',
            'email.required' => 'Email Address is required',
            'email.email' => 'Please provide a valid email address',
            'phone.required' => 'Phone number is required',
            'phone.regex' => 'Phone number should be in a valid format',
            'website.required' => 'The website is required',
            'sponsor.required' => 'The sponsor is required',
            'event_speaker.required' => 'The event speaker is required',
            'photo.max' => 'Image should be at least 2MB',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
            'tags.string' => 'Tags should be a valid text',
        ];
    }
}
