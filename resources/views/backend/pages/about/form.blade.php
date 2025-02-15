@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="About Us" currentPage="About Us"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">About Us</h4>
                                <x-form has-files :action="route('aboutus.store')">
                                    <div class="form-group">
                                        <x-input.label for="title">Our Vision</x-input.label>
                                        <x-input.text type="text"
                                            class="form-control @error('vision') error-message @enderror" id="vision"
                                            :value="old('vision',$data['about_intro']['vision'])" name="vision" placeholder="Our Vision" required />
                                        @error('vision')
                                            <x-input.error id="vision"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="mission">Our Mission</x-input.label>
                                        <textarea name="mission" class="form-control @error('mission') error-message @enderror" id="mission"
                                        aria-label="With textarea">{{old('mission',$data['about_intro']['mission'])}}</textarea>
                                       
                                        @error('mission')
                                            <x-input.error id="mission"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="value">Our Values</x-input.label>
                                        <textarea name="value" class="form-control @error('value') error-message @enderror" id="value"
                                            aria-label="With textarea">{{old('value',$data['about_intro']['value'])}}</textarea>
                                        @error('value')
                                            <x-input.error  class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>                                    
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <x-input.label for="organizer">Who we are Title</x-input.label>
                                            <x-input.text type="text"
                                                class="form-control @error('title') error-message @enderror"
                                                id="title" :value="old('title',$data['about_title'])" name="title" placeholder="title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <x-input.label for="value">Description</x-input.label>
                                            <textarea name="description" class="form-control @error('value') error-message @enderror" id="description"
                                                aria-label="With textarea">{{old('description',$data['about_content'])}}</textarea>
                                            @error('description')
                                                <x-input.error  class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="row">
                                        <div class="col-sm-6 mb-3">
                                        
                                            <x-input.upload label="Who we are Photo (770px * 460px)" id="photo" name="photo"
                                                accept="image/*"
                                                onchange="
                                            const selectedFiles = this.files;
                                            const label = this.nextElementSibling;
                                            label.textContent = selectedFiles[0].name;
                                        " />
                                            @error('photo')
                                                <x-input.error id="photo"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                        
                                            <x-input.upload label="Who we are Photo (770px * 460px)" id="photo2" name="photo2"
                                                accept="image/*"
                                                onchange="
                                            const selectedFiles = this.files;
                                            const label = this.nextElementSibling;
                                            label.textContent = selectedFiles[0].name;
                                        " />
                                            @error('photo2')
                                                <x-input.error id="photo"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                        </div>
                                    </div> --}}

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
            $('#value,#mission,#description').summernote({
                placeholder: 'Write a short value...',
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush