@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Departments" currentPage="Departments"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($articleCategory)) Edit Department @else Departments @endif </h4>
                                <x-form has-files :action="isset($articleCategory) ? route('departments.update', $articleCategory->id): route('departments.store')" :method="isset($articleCategory) ? 'PUT': 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="title">Department Name</x-input.label>
                                            <x-input.text type="text" class="form-control @error('name') error-message @enderror" id="name" :value="isset($articleCategory) ? old('name',$articleCategory): old('name')" name="name" placeholder="Name"
                                                required />
                                            @error('title')
                                                <x-input.error id="name"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                            <x-input.text type="text" class="form-control @error('description') error-message @enderror" id="description" :value="isset($articleCategory) ? old('description',$articleCategory): old('description')" name="description" placeholder="Description"
                                                required />
                                            @error('description')
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
