@props([
    'type',
    'value',
    'class',
    'id',
    'placeholder',
])
@aware(['error'])

<input type="{{ $type }}" class={{$class}} id="{{ $id }}" placeholder="{{ $placeholder }}" 
    @isset($name) name="{{$name}}"@endisset
    @isset($value)
        value="{{$value}}"
    @endisset
/>