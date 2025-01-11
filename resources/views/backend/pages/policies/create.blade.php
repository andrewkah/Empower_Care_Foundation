@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Policy" currentPage="Policy"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($policy)) Edit Policy @else Policies @endif </h4>
                                <x-form has-files :action="isset($policy) ? route('policies.update', $policy->id): route('policies.store')" :method="isset($policy) ? 'PUT': 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="isset($policy) ? old('title',$policy): old('title')" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">File Attachment</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('file') error-message @enderror" id="file"
                                                    name="file" accept=".pdf, .doc, .docx, .txt" :value="isset($policy) ? old('file',$policy): old('file')"
                                                    onchange="document.querySelector('#file + label').textContent = this.files[0].name">
                                                <label class="custom-file-label" for="file">
                                                    {{isset($policy) ? basename($policy->file) : 'Browse'}}
                                                </label>
                                            </div>
                                        </div>
                                        @error('file')
                                            <x-input.error id="file"
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
