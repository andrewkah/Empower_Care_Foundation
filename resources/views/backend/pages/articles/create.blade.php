@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Articles" currentPage="Articles"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($data)) Edit Article @else Articles @endif </h4>
                                <x-form has-files :action="isset($data) ? route('articles.update', $data->id): route('articles.store')" :method="isset($data) ? 'PUT': 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="isset($data) ? old('title',$data): old('title')" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="summary">Summary</x-input.label>
                                            <x-input.text type="text" class="form-control @error('summary') error-message @enderror" id="summary" :value="isset($data) ? old('summary',$data): old('summary')" name="summary" placeholder="Summary"
                                                required />
                                            @error('summary')
                                                <x-input.error id="summary" class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                        @if(isset($data))
                                        <textarea name="description" class="form-control @error('description') error-message @enderror" name="description" id="description" aria-label="With textarea">{{old('description',$data->description)}}</textarea>
                                        @else
                                            <textarea class="form-control @error('description') error-message @enderror" name="description" id="description" aria-label="With textarea">{{old('description')}}</textarea>
                                        @endif 
                                            @error('description')
                                                <x-input.error id="description" class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="quote">Quote</x-input.label>
                                                <x-input.text type="text" class="form-control @error('quote') error-message @enderror" id="quote" :value="isset($data) ? old('quote',$data): old('quote')" name="quote" placeholder="Quote"
                                                    required />
                                                @error('quote')
                                                    <x-input.error id="quote"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="tag">Tag</x-input.label>
                                                <x-input.text type="text" class="form-control @error('tag') error-message @enderror" id="tag" :value="isset($data) ? old('tag',$data): old('tag')" name="tag" placeholder="Tag"
                                                    required />
                                                @error('tag')
                                                    <x-input.error id="tag"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Article Category</label>
                                        <select data-live-search="true" name="article_cat_id" class="form-control selectpicker @error('article_cat_id')error-message @enderror" id="simple-select2">
                                            <option value="">Select </option>
                                            @foreach($categories as $role)
                                            <option value="{{$role->id}}" @if(isset($data)) @selected($data->article_cat_id == $role->id)  @else  @endif>{{$role->title}}</option>
                                            @endforeach
                                          </optgroup>
                                        </select>
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
                                        @if(isset($data) && $data->photo !=null)
                                        <div class="media mb-2 mt-2">
                                            <img class="img-fluid mr-4" src="{{Storage::url($data->photo)}}" style="height: 100px;" alt="image">
                                            <div class="media-body">
                                            </div>
                                        </div>
                                        @endif
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
