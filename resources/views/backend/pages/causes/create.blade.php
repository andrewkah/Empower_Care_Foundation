@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Our Impacts" currentPage="Impact"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($cause)) Edit Impact @else Impacts @endif</h4>
                                    <x-form has-files :action="isset($cause) ? route('impacts.update', $cause->id) : route('impacts.store')" :method="isset($cause) ? 'PUT': 'POST'"> 
                               
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
                                                                        
                                    <div class="form-group">
                                        <x-input.label for="description">Impact Number</x-input.label>
                                        @if(isset($cause))
                                        <x-input.text type='number' class="form-control @error('description') error-message @enderror" id="impact"  value="{{ old('description',$cause->description)}}" name='description' placeholder="" required />
                                        @else
                                            <x-input.text type='number' class="form-control @error('description') error-message @enderror"   id="impact"   value="{{ old('description')}}" name='description' placeholder="" required />
                                            
                                        @endif 
                                            @error('description')
                                                <x-input.error  class="form-text text-danger">{{ $message }}</x-input.error>
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
