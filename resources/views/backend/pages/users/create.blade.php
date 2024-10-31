@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Users" currentPage="Users"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Users</h4>
                                <x-form has-files :action="route('users.store')">
                                    <div class="form-group">
                                        <x-input.label for="name">Name</x-input.label>
                                            <x-input.text type="text" class="form-control" id="title" :value="old('name')" name="name" placeholder="Name"
                                                required />
                                            @error('name')
                                                <x-input.error id="name"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="email">Email Address</x-input.label>
                                            <x-input.text type="text" class="form-control" id="email" :value="old('email')" name="email" placeholder="Name"
                                                required />
                                            @error('email')
                                                <x-input.error id="email"
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
