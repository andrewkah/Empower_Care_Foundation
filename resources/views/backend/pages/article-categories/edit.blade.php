@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Article Category" currentPage="Article Category"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">

            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Article Category</h4>
                                <x-form has-files :action="route('article-categories.create')">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="{{ old('title',$data->title)}}" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
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
