@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Causes" currentPage="Causes"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Causes</h4>
                                <x-form has-files :action="route('causes.update')">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                        <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="{{ old('title',$data->title)}}"
                                            name="title" placeholder="Title" required />
                                        @error('title')
                                            <x-input.error id="title"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Cover Photo</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('photo') error-message @enderror" id="photo"
                                                    name="photo" accept=".jpg, .jpeg, .png"
                                                    onchange="document.querySelector('#photo + label').textContent = this.files[0].name">
                                                <label class="custom-file-label" for="photo"></label>
                                            </div>
                                        </div>
                                        @error('photo')
                                            <x-input.error id="photo"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                        <textarea class="form-control @error('description') error-message @enderror" value="{{ old('description',$data->description)}}" aria-label="With textarea"></textarea>
                                        @error('description')
                                            <x-input.error id="description"
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
