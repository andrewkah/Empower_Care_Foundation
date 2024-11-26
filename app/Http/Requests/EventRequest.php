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
            'summary' => 'required|string',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'email' => 'required|email',
            'organizer' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'website' => 'required|url|max:255',
            'phone' => 'required|string|max:20',
            'sponsor' => 'required|string|max:255',
            'event_speaker' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'event_cat_id' => 'required|exists:event_categories,id',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.string' => 'The title should be a valid text',
            'summary.required' => 'Summary is required',
            'event_date.required' => 'The date is required',
            'event_date.date' => 'Date should be a valid date',
            'event_time.required' => 'The time is required',
            'organizer.required' => 'The organizer is required',
            'location.required' => 'Location is required',
            'email.required' => 'Email Address is required',
            'email.email' => 'Please provide a valid email address',
            'phone.required' => 'Phone number is required',
            'website.required' => 'The website is required',
            'sponsor.required' => 'The sponsor is required',
            'event_speaker.required' => 'The event speaker is required',
            'photo.max' => 'Image should be at least 3MB',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
            'tags.string' => 'Tags should be a valid text',
        ];
    }
}
