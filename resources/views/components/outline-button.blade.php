@props(['color', 'type', 'onclick']));

<button type="{{$type}}" class="btn btn-outline-{{ $color }}  mb-3" onclick="{{ $onclick }}">
    {{ $slot }}
</button>