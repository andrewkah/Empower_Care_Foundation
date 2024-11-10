@extends('backend.layout.main')

@section('content')

    @push('styles')
        <style>
            /* Existing and new image preview container */
            .image-preview,
            .new-image-preview {
                display: inline-block;
                margin: 11px;
                position: relative;
                border: 1px solid #ccc;
                padding: 10px;
                border-radius: 5px;
                background-color: #f9f9f9;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            /* Image styling */
            .image-preview img {
                max-width: 100px;
                max-height: 100px;
                display: block;
                margin-bottom: 10px;
                border-radius: 3px;
            }

            /* Caption input field */
            .image-caption,
            .new-image-caption {
                display: block;
                width: 90%;
                margin: 5px auto;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 3px;
                font-size: 14px;
            }

            /* Remove button for both existing and new images */
            .remove-image,
            .remove-new-image {
                position: absolute;
                top: -10px;
                right: -10px;
                background-color: #ff4d4d;
                color: white;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                width: 24px;
                height: 24px;
                text-align: center;
                font-size: 14px;
                line-height: 24px;
            }

            .remove-image:hover,
            .remove-new-image:hover {
                background-color: #e60000;
            }
        </style>
    @endpush
    <!-- header area start -->
    <x-admin.header pageTitle="Programs" currentPage="Programs"></x-admin.header>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add Photos to {{ $album->title }} Album </strong>
                        </div>
                        <div class="card-body card-block">
                            <form method="post" action="{{ route('program.update_gallery', $album->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Existing images with captions -->
                                @if ($album->other_photos != null)
                                    @foreach ($album->other_photos as $index => $image)
                                        <div class=" image-preview row">
                                            <div class="col-4 mt-2 mb-2">
                                                <img src="{{ Storage::url($image) }}" alt="Image" height="75"
                                                    width="75">
                                            </div>
                                            <div class="col-4"><input type="text" name="captions[{{ $index }}]"
                                                    value="{{ old('captions.' . $index, $album->captions[$index] ?? '') }}"
                                                    class="image-caption form-control" placeholder="Enter caption"></div>
                                            <div class="col-1"><button type="button"
                                                    class="remove-image btn btn-sm btn-danger"
                                                    data-index="{{ $index }}">X</button></div>
                                            <input type="hidden" name="existing_images[]" value="{{ $image }}">
                                        </div>
                                    @endforeach
                                @endif
                                <!-- Section for adding new images -->
                                <div id="new-images-section">
                                    <label for="new-images">Add New Images:</label>
                                    <button type="button" class="btn btn-sm btn-info" id="add-new-images">Add Image with
                                        Caption</button>
                                </div>

                                <!-- Section for new image previews with captions -->
                                <div id="new-captions-section"></div>

                                {{-- <div class="form-group">
                  <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                  <div class="input-group">
                  <input class="form-control" type="file" name="new_images[]" multiple value="" >
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
  
                  @error('photo')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div> --}}

                <div class="form-group d-flex mt-4">
                    <div class="form-group mb-3 mr-4">
                        <button class="btn btn-success" type="submit" id="banner_submit">Update</button>
                    </div>
                    <div class="form-group mb-3">
                        <a href="{{ route('programs.index') }}" class="btn btn-danger" id="banner_back">Back</a>
                    </div>
                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
h

@push('scripts')
    <script>
        $(document).ready(function() {
            function reIndexCaptions() {
                $('.image-preview').each(function(index) {
                    // Re-index the existing image captions
                    $(this).find('.image-caption').attr('name', 'captions[' + index + ']');
                    $(this).find('input[type="hidden"]').attr('name', 'existing_images[' + index + ']');
                });
            }
            // Remove existing image
            $('.remove-image').on('click', function() {
                $(this).closest('.image-preview').remove();
                reIndexCaptions();
            });

            // Add new image with caption dynamically
            $('#add-new-images').on('click', function() {
                $('#new-captions-section').append(`
            <div class="new-image-preview row mb-2">
                <div class="col-4">
                     <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Photo (81px * 81px)</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="photo"
                                                    name="new_images[]" accept="image/*" onchange="document.querySelector('#photo + label').textContent = this.files[0].name">
                                                   >
                                                <label class="custom-file-label" for="photo">Browse</label>
                                            </div>
                                        </div>
                                        </div>
                <div class="col-4"><input type="text" name="new_captions[]" class="new-image-caption form-control" placeholder="Enter caption for new image"></div>
                <button type="button" class="remove-new-image btn btn-sm btn-danger">X</button>
            </div>
        `);
            });

            // Remove new image input
            $(document).on('click', '.remove-new-image', function() {
                $(this).closest('.new-image-preview').remove();
            });
            $('#description').summernote({
                placeholder: 'Write a short description...',
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush
