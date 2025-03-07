@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Programs" currentPage="Programs"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">
                                    @if (isset($program))
                                        Edit Program
                                    @else
                                        Programs
                                    @endif
                                </h4>
                                <x-form has-files :action="isset($program)
                                    ? route('programs.update', $program->id)
                                    : route('programs.store')" :method="isset($program) ? 'PUT' : 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                        <x-input.text type="text"
                                            class="form-control @error('title') error-message @enderror" id="title"
                                            :value="isset($program) ? old('title', $program) : old('title')" name="title" placeholder="Title" required />
                                        @error('title')
                                            <x-input.error id="title"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="location">Location</x-input.label>
                                        <x-input.text type="text"
                                            class="form-control @error('location') error-message @enderror" id="location"
                                            :value="isset($program) ? old('location', $program) : old('location')" name="location" placeholder="Location" required />
                                        @error('location')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="objectives">Objectives</x-input.label>
                                        <textarea name="objectives" class="form-control @error('objectives') error-message @enderror"
                                            aria-label="With textarea">{{ isset($program) ? old('objectives', $program) : old('objectives') }}</textarea>
                                        @error('objectives')
                                            <x-input.error id="objectives"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                        <textarea name="description" class="form-control @error('description') error-message @enderror"
                                            aria-label="With textarea">{{ isset($program) ? old('description', $program) : old('description') }}</textarea>
                                        @error('description')
                                            <x-input.error id="description"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Cover Photo (1290px * 560px)</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('photo') error-message @enderror"
                                                    id="photo" name="photo" accept="image/*"
                                                    onchange="document.querySelector('#photo + label').textContent = this.files[0].name">
                                                <label class="custom-file-label" for="photo">Browse</label>
                                            </div>
                                        </div>
                                        @if (isset($program) && $program->photo != null)
                                            <div class="media mb-2 mt-2">
                                                <img class="img-fluid mr-4" src="{{ Storage::url($program->photo) }}"
                                                    style="height: 100px;" alt="image">
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#description,#objectives').summernote({
                placeholder: 'Write a short description...',
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush
