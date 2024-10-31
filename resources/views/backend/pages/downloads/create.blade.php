@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-header :pageTitle="Causes" :currentPage="Causes"></x-header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row">

            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Causes</h4>
                                <x-form has-files :action="route('causes.store')">
                                    <div class="form-group">
                                        <x-input.label for="title">
                                            <x-input.text type="text" class="form-control" id="title" :value="old('title')" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                            @error('description')
                                                <x-input.error id="description">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <x-outline-button type="submit" color="primary">Submit</x-outline-button>
                                </x-form>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
