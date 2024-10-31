@props(['color', 'href' => '#'])

<a href={{ $href }} class="btn btn-outline-{{ $color }} mb-3">
    {!! $slot !!}
</a>