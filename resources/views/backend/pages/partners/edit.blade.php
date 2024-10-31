@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Partners" currentPage="Partners"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Partners</h4>
                                <x-form has-files :action="route('partners.update')">
                                    <div class="form-group">
                                        <x-input.label for="name">Name</x-input.label>
                                            <x-input.text type="text" class="form-control @error('name') error-message @enderror" id="name" :value="{{ old('name',$data->name)}}" name="name" placeholder="Name"
                                                required />
                                            @error('name')
                                                <x-input.error id="name"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                     <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="address">Address</x-input.label>
                                                <x-input.text type="text" class="form-control @error('address') error-message @enderror" id="address" :value="{{ old('address',$data->address)}}" name="address" placeholder="Address"
                                                    required />
                                                @error('address')
                                                    <x-input.error id="address"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="website">Website</x-input.label>
                                                <x-input.text type="text" class="form-control @error('website') error-message @enderror" id="website" :value="{{ old('website',$data->website)}}" name="website" placeholder="Website"
                                                    required />
                                                @error('website')
                                                    <x-input.error id="website"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Cover Photo</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('photo') error-message @enderror" id="photo"
                                                    name="photo" accept=".jpg, .jpeg, .png"
                                                    onchange="document.querySelector('#photo + label').textContent = this.files[0].name">
                                                <label class="custom-file-label" for="photo">Browse</label>
                                            </div>
                                        </div>
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
