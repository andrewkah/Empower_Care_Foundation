@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Videos" currentPage="Videos"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($video)) Edit Video @else Videos @endif</h4>
                                <x-form has-files :action="isset($video) ? route('videos.update', $video->id): route('videos.store')" :method="isset($video) ? 'PUT': 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="isset($video) ? old('title',$video): old('title')" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="link">Link</x-input.label>
                                            <x-input.text type="url" class="form-control @error('link') error-message @enderror" id="link" :value="isset($video) ? old('link',$video): old('link')" name="link" placeholder="https://"
                                                required />
                                            @error('link')
                                                <x-input.error id="link"
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
