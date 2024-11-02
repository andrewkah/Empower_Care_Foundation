@props(['label', 'name', 'id', 'accept' => ''])

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">{{ $label }}</span>
    </div>
    <div class="custom-file">
        <input type="file"  id="{{$id}}" accept="{{ $accept }}" {{ $attributes }} name="{{ $name }}" >
        <label class="custom-file-label" for="{{ $id }}">Browse</label>
    </div>
</div>
