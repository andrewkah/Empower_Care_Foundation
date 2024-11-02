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
                                <h4 class="header-title">Articles</h4>
                                <x-form has-files :action="route('articles.store')">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="old('title')" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="summary">Summary</x-input.label>
                                            <x-input.text type="text" class="form-control @error('summary') error-message @enderror" id="summary" :value="old('summary')" name="summary" placeholder="Summary"
                                                required />
                                            @error('summary')
                                                <x-input.error id="summary" class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                            <textarea class="form-control @error('description') error-message @enderror" aria-label="With textarea"></textarea>
                                            @error('description')
                                                <x-input.error id="description">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="quote">Quote</x-input.label>
                                                <x-input.text type="text" class="form-control @error('quote') error-message @enderror" id="quote" :value="old('quote')" name="quote" placeholder="Quote"
                                                    required />
                                                @error('quote')
                                                    <x-input.error id="quote"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="tag">Tag</x-input.label>
                                                <x-input.text type="text" class="form-control @error('tag') error-message @enderror" id="tag" :value="old('tag')" name="tag" placeholder="Tag"
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
                                            <option value="{{$role->id}}" @if(isset($data)) @selected($data->article_cat_id == $role->id)  @else  @endif>{{$role->name}}</option>
                                            @endforeach
                                          </optgroup>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <x-input.upload label="Choose Photo" id="photo" name="photo" accept=".jpg, .jpeg, .png" onchange="
                                        const selectedFiles = this.files;
                                        const label = this.nextElementSibling;
                                        label.textContent = selectedFiles[0].name;
                                    "/>
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
