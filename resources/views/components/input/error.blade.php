@props([
    'id'
])

<small id="{{ $id }}" {{$attributes}}>{{$slot}}</small>