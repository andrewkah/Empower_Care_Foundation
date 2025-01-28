@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Events" currentPage="Events"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Events</h4>
                                <x-form has-files :action="route('events.update', $data->id)" method="PUT">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="old('title', $data->title)" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="summary">Summary</x-input.label>
                                                <textarea name="summary" class="form-control @error('summary') error-message @enderror" id="summary"
                                                aria-label="With textarea">{{old('summary',$data)}}</textarea>
                                            @error('summary')
                                                <x-input.error id="summary">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                            <textarea name="description"  id="description" class="form-control @error('description') error-message @enderror" aria-label="With textarea">{{old('description',$data)}}</textarea>
                                            @error('description')
                                                <x-input.error>{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="event_date">Event date</x-input.label>
                                                <x-input.text type="date" class="form-control @error('event_date') error-message @enderror" id="event_date" :value=" old('event_date',$data->event_date)" name="event_date" placeholder="Event date"
                                                    required />
                                                @error('event_date')
                                                    <x-input.error id="event_date"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="event_time">Event Time</x-input.label>
                                                <x-input.text type="time" class="form-control @error('event_time') error-message @enderror" id="event_time" :value="old('event_time',$data->event_time)" name="event_time" placeholder="Event time"
                                                    required />
                                                @error('event_time')
                                                    <x-input.error id="event_time"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="email">Email Address</x-input.label>
                                            <x-input.text type="email" class="form-control @error('email') error-message @enderror" id="email" :value=" old('email',$data->email)" name="email" placeholder="someone@example.com"
                                                required />
                                            @error('email')
                                                <x-input.error id="email"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="organizer">Organizer</x-input.label>
                                                <x-input.text type="text" class="form-control @error('organizer') error-message @enderror" id="organizer" :value="old('organizer',$data->organizer)" name="organizer" placeholder="Organizer"
                                                    required />
                                                @error('organizer')
                                                    <x-input.error id="organizer"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="location">Location</x-input.label>
                                                <x-input.text type="text" class="form-control @error('location') error-message @enderror" id="location" :value="old('location',$data->location)" name="location" placeholder="Location"
                                                    required />
                                                @error('location')
                                                    <x-input.error id="location"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="website">Website</x-input.label>
                                            <x-input.text type="text" class="form-control @error('website') error-message @enderror" id="website" :value=" old('website',$data->website)" name="website" placeholder="Website"
                                                required />
                                            @error('website')
                                                <x-input.error id="website"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="phone">Contact</x-input.label>
                                                <x-input.text type="text" class="form-control @error('phone') error-message @enderror" id="phone" :value=" old('phone',$data->phone)" name="phone" placeholder="123-456-7890"
                                                    required />
                                                @error('phone')
                                                    <x-input.error id="phone"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="sponsor">Sponsor</x-input.label>
                                                <x-input.text type="text" class="form-control @error('sponsor') error-message @enderror" id="sponsor" :value=" old('sponsor',$data->sponsor)" name="sponsor" placeholder="Sponsor"
                                                    required />
                                                @error('sponsor')
                                                    <x-input.error id="sponsor"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="event_speaker">Event Speaker</x-input.label>
                                                <x-input.text type="text" class="form-control @error('event_speaker') error-message @enderror" id="event_speaker" :value=" old('event_speaker',$data->event_speaker)" name="event_speaker" placeholder="Event Speaker"
                                                    required />
                                                @error('event_speaker')
                                                    <x-input.error id="event_speaker"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="tags">Tags</x-input.label>
                                                <x-input.text type="text" class="form-control @error('tags') error-message @enderror" id="tags" :value=" old('tags',$data->tags)" name="tags" placeholder="Tags"
                                                    required />
                                                @error('tags')
                                                    <x-input.error id="tags"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Event Category</label>
                                        <select data-live-search="true" name="event_cat_id" class="form-control selectpicker @error('event_cat_id')error-message @enderror" id="simple-select2">
                                            <option value="">Select </option>
                                            @foreach($categories as $role)
                                            <option value="{{$role->id}}" @if(isset($data)) @selected($data->event_cat_id == $role->id)  @else  @endif>{{$role->title}}</option>
                                            @endforeach
                                          </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Event Department</label>
                                        <select data-live-search="true" name="department_id" required
                                            class="form-control selectpicker @error('department_id')error-message @enderror"
                                            id="simple-select2">
                                            <option value="">Select </option>
                                            @foreach ($departments as $role)
                                                <option value="{{ $role->id }}"
                                                    @if (isset($data)) @selected($data->department_id == $role->id)  @else @endif>
                                                    {{ $role->name }}</option>
                                            @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                       
                                        <x-input.upload label="Choose Photo (770px * 460px)" id="photo" name="photo" accept="image/*" onchange="
                                        const selectedFiles = this.files;
                                        const label = this.nextElementSibling;
                                        label.textContent = selectedFiles[0].name;
                                    "/>
                                        @error('photo')
                                                <x-input.error id="photo"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    
                                    <div class="d-flex justify-content-end mr-0 mt-4">
                                        <x-admin.submit type="submit" color="primary">Submit</x-admin.submit>
                                    </div>
                                </x-form>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#description,#summary').summernote({
                placeholder: 'Write a short description...',
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush