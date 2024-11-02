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
                                            <x-input.text type="text" class="form-control @error('title') error-message @enderror" id="title" :value="{{ old('title',$data->title)}}" name="title" placeholder="Title"
                                                required />
                                            @error('title')
                                                <x-input.error id="title"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="summary">Summary</x-input.label>
                                            <x-input.text type="text" class="form-control @error('summary') error-message @enderror" id="summary" :value="{{ old('summary',$data->summary)}}" name="summary" placeholder="Summary"
                                                required />
                                            @error('summary')
                                                <x-input.error id="summary">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="description">Description</x-input.label>
                                            <textarea class="form-control @error('description') error-message @enderror" value="{{ old('description',$data->description)}}" aria-label="With textarea"></textarea>
                                            @error('description')
                                                <x-input.error id="description">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="quote">Quote</x-input.label>
                                                <x-input.text type="text" class="form-control @error('quote') error-message @enderror" id="quote" :value="{{ old('quote',$data->quote)}}" name="quote" placeholder="Quote"
                                                    required />
                                                @error('quote')
                                                    <x-input.error id="quote"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <x-input.label for="tag">Tag</x-input.label>
                                                <x-input.text type="text" class="form-control @error('tag') error-message @enderror" id="tag" :value="{{ old('tag',$data->tag)}}" name="tag" placeholder="Tag"
                                                    required />
                                                @error('tag')
                                                    <x-input.error id="tag"
                                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Event Category</label>
                                        <select data-live-search="true" name="article_cat_id" class="form-control selectpicker @error('article_cat_id')error-message @enderror" id="simple-select2">
                                            <option value="">Select </option>
                                            @foreach($categories as $role)
                                            <option value="{{$role->id}}" @if(isset($data)) @selected($data->article_cat_id == $role->id)  @else  @endif>{{$role->name}}</option>
                                            @endforeach
                                          </optgroup>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div id="existing-images-container" class="mb-4">
                                            <x-input.label for="existing_photos[]">Quote</x-input.label>
                                            @foreach(json_decode($data->photos, true) as $photo)
                                                <div class="input-group custom-input-group">
                                                    <img src="{{ asset('storage/' . $photo) }}" alt="Image" width="100">
                                                    <input type="hidden" id="existing_photos[]" name="existing_photos[]" value="{{ $photo }}">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-danger" onclick="removeExistingImage(this, '{{ $photo }}')">Remove</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Add New Image</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="new_photo" name="new_photo" accept=".jpg, .jpeg, .png">
                                                <label class="custom-file-label" for="new_photo">Browse</label>
                                            </div>
                                        </div>
                                        <div id="cover_photo_error" class="form-text text-danger"></div>
                                        <div id="upload-container"></div>
                                    
                                        <!-- Hidden inputs to store JSON data -->
                                        <input type="hidden" id="images_json" name="images_json">
                                        <input type="hidden" id="captions_json" name="captions_json">
                                    
                                        
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
    <script>
        const imagesArray = @json(old('photos', json_decode($data->photos, true)));
        const captionsArray = [];
    
        document.getElementById('new_photo').addEventListener('change', function () {
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
                fileInput.disabled = true; // Disable the file input
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
    
                // Append the file input and caption input to the input group
                inputGroup.appendChild(customFileDiv);
                inputGroup.appendChild(inputGroupAppend);
    
                // Append the input group to the container
                document.getElementById('upload-container').appendChild(inputGroup);
    
                // Update the hidden inputs with JSON encoded data
                updateHiddenInputs();
    
                // Reset the error message if a new file is successfully added
                clearErrorMessage();
            }
    
            // Reset the file input for the next file selection
            this.value = '';
        });
    
        function updateHiddenInputs() {
            document.getElementById('images_json').value = JSON.stringify(imagesArray);
            document.getElementById('captions_json').value = JSON.stringify(captionsArray);
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
            // Clear any existing error message
            const errorPlaceholder = document.getElementById('cover_photo_error');
            errorPlaceholder.innerHTML = '';
        }
    
        function removeExistingImage(button, imageName) {
            // Remove the image from the array
            const index = imagesArray.indexOf(imageName);
            if (index > -1) {
                imagesArray.splice(index, 1);
            }
    
            // Remove the input group element
            button.closest('.input-group').remove();
    
            updateHiddenInputs();
        }
    </script>
@endsection
