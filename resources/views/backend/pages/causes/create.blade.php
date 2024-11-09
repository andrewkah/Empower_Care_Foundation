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
                                <h4 class="header-title">@if(isset($cause)) Edit Cause @else Causes @endif</h4>
                                    <x-form has-files :action="isset($cause) ? route('causes.update', $cause->id) : route('causes.store')" :method="isset($cause) ? 'PUT': 'POST'"> 
                               
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                        @if(isset($cause))
                                        <x-input.text type='text' class="form-control @error('title') error-message @enderror" id="title"  value="{{ old('title',$cause->title)}}" name='title' placeholder="Title"
                                            required />
                                        @else
                                        <x-input.text type='text' class="form-control @error('title') error-message @enderror" id="title"  value="{{ old('title')}}" name='title' placeholder="Title"
                                            required />
                                        @endif
                                           
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Cover Photo (81px * 81px)</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('photo') error-message @enderror" id="photo"
                                                    name="photo" accept="image/*"
                                                    onchange="document.querySelector('#photo + label').textContent = this.files[0].name">
                                                <label class="custom-file-label" for="photo">Browse</label>
                                            </div>
                                        </div>
                                        @error('photo')
                                                <x-input.error id="photo"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                            @if(isset($cause) && $cause->photo !=null)
                                            <div class="media mb-2 mt-2">
                                                <img class="img-fluid mr-4" src="{{Storage::url($cause->photo)}}" style="height: 100px;" alt="image">
                                                <div class="media-body">
                                                </div>
                                            </div>
                                            @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                        @if(isset($cause))
                                        <textarea name="description" class="form-control @error('description') error-message @enderror" name="description" id="description" aria-label="With textarea">{{old('description',$cause->description)}}</textarea>
                                        @else
                                            <textarea class="form-control @error('description') error-message @enderror" name="description" id="description" aria-label="With textarea">{{old('description')}}</textarea>
                                        @endif 
                                            @error('description')
                                                <x-input.error id="description" class="form-text text-danger">{{ $message }}</x-input.error>
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
        $('#description').summernote({
            placeholder: 'Write a short description...',
            tabsize: 2,
            height: 150
        });
    });
</script>
@endpush
