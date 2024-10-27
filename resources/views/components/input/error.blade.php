@props([
    'id',
    'class',
])

<small id="{{ $id }}" class="{{$class}}">{{$slot}}</small>