@props(['color', 'type' => 'submit',])

<button type={{ $type }} class="btn btn-{{ $color }} mb-3">
    {!! $slot !!}
</button>