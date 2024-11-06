@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="Albums" currentPage="Albums"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($album)) Edit Album @else Albums @endif </h4>
                                <x-form has-files :action="isset($album) ? route('album.update', $album->id): route('album.store')" :method="isset($album) ? 'PUT': 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="title">Title</x-input.label>
                                        <x-input.text type="text"
                                            class="form-control @error('title') error-message @enderror" id="title"
                                            :value="isset($album) ? old('title',$album): old('title')" name="title" placeholder="Title" required />
                                        @error('title')
                                            <x-input.error id="title"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Cover Photo</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('cover_photo') error-message @enderror"
                                                    id="cover_photo" name="cover_photo" accept=".jpg, .jpeg, .png"
                                                    onchange="document.querySelector('#cover_photo + label').textContent = this.files[0].name">
                                                <label class="custom-file-label" for="cover_photo">Browse</label>
                                            </div>
                                        </div>
                                        @if(isset($album) && $album->photo !=null)
                                        <div class="media mb-2 mt-2">
                                            <img class="img-fluid mr-4" src="{{Storage::url($album->photo)}}" style="height: 100px;" alt="image">
                                            <div class="media-body">
                                            </div>
                                        </div>
                                        @endif
                                        @error('cover_photo')
                                            <x-input.error id="cover_photo"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                        @if(isset($album))
                                        <textarea name="description" class="form-control @error('description') error-message @enderror" name="description" id="description" aria-label="With textarea">{{old('description',$album->description)}}</textarea>
                                        @else
                                            <textarea class="form-control @error('description') error-message @enderror" name="description" id="description" aria-label="With textarea">{{old('description')}}</textarea>
                                        @endif 
                                            @error('description')
                                                <x-input.error id="description" class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    {{-- <div class="mb-3">
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" id="photos" accept=".jpg, .jpeg, .png" multiple
                                                    name="photos">
                                                <label class="custom-file-label" for="photos">Choose Photos</label>
                                            </div>
                                        </div>

                                        @error('photos')
                                            <x-input.error id="photos"
                                                class="form-text text-danger">{{ $message }}</x-input.error>
                                        @enderror
                                        <div id="cover_photo_error" class="form-text text-danger"></div>
                                        <div id="upload-container"></div>

                                        <!-- Hidden inputs to store JSON data -->
                                        <input type="hidden" id="photos" name="photos">
                                        <input type="hidden" id="captions" name="captions">
                                        

                                    </div> --}}
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
    {{-- <script>
        const imagesArray = [];
        const captionsArray = [];

        document.getElementById('photos').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                if (imagesArray.includes(file.name)) {
                    // If the file already exists, inform the user and return
                    displayErrorMessage('This file has already been uploaded.');
                    this.value = ''; // Reset the file input
                    return;
                }
                imagesArray.push(file.name); // Push file name to imagesArray

                // Create a new div for each file input and caption
                const inputGroup = document.createElement('div');
                inputGroup.classList.add('input-group', 'custom-input-group');

                // Create the file input element
                const fileInput = document.createElement('input');
                fileInput.type = 'file';
                fileInput.classList.add('custom-file-input');
                fileInput.name = `uploaded_files[]`;
                fileInput.disabled = true;
                fileInput.value = ''; // Clear any default value to make it selectable again

                // Create the label for the file input
                const fileLabel = document.createElement('label');
                fileLabel.classList.add('custom-file-label');
                fileLabel.textContent = file.name;

                // Create the caption input element
                const captionInput = document.createElement('input');
                captionInput.type = 'text';
                captionInput.classList.add('form-control');
                captionInput.name = `captions[]`;
                captionInput.placeholder = 'Enter caption';

                // Update the captionsArray when the caption is changed
                captionInput.addEventListener('input', function() {
                    captionsArray[imagesArray.length - 1] = this.value;
                    updateHiddenInputs();
                });

                captionsArray.push(''); // Initialize the caption array with an empty string

                // Append elements to the input group
                const inputGroupAppend = document.createElement('div');
                inputGroupAppend.classList.add('input-group-append');
                inputGroupAppend.appendChild(captionInput);

                const customFileDiv = document.createElement('div');
                customFileDiv.classList.add('custom-file');
                customFileDiv.appendChild(fileInput);
                customFileDiv.appendChild(fileLabel);

                inputGroup.appendChild(customFileDiv);
                inputGroup.appendChild(inputGroupAppend);

                document.getElementById('upload-container').appendChild(inputGroup);

                updateHiddenInputs();
                clearErrorMessage();
            }

            this.value = '';
        });

        function updateHiddenInputs() {
            document.getElementById('photos').value = JSON.stringify(imagesArray);
            document.getElementById('captions').value = JSON.stringify(captionsArray);
        }

        function displayErrorMessage(message) {
            // Create an error message element and display it
            const errorMessageElement = document.createElement('div');
            errorMessageElement.classList.add('form-text', 'text-danger');
            errorMessageElement.textContent = message;

            // Find the error message placeholder and append the error message
            const errorPlaceholder = document.getElementById('cover_photo_error');
            errorPlaceholder.innerHTML = '';
            errorPlaceholder.appendChild(errorMessageElement);
        }
        function clearErrorMessage() {
            const errorPlaceholder = document.getElementById('cover_photo_error');
            errorPlaceholder.innerHTML = '';
        }
    </script> --}}
@endsection
