@props(['label', 'name', 'id', 'accept' => ''])

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">{{ $label }}</span>
    </div>
    <div class="custom-file">
        <input type="file"  id="{{$id}}" accept="{{ $accept }}" {{ $attributes }} name="{{ $name }}" onchange="
            const selectedFiles = this.files;
            const label = this.nextElementSibling;
            label.textContent = selectedFiles.length > 1 ? `${selectedFiles.length} files selected` : selectedFiles[0].name || 'Browse';
        ">
        <label class="custom-file-label" for="{{ $id }}">Browse</label>
    </div>
</div>
