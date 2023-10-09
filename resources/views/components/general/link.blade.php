@props([
    'type' => 'default'
])
<a
    @if ($type === 'primary')
        {{ $attributes->merge(['class' => 'transition text-primary hover:text-primary/80 focus:text-primary/80']) }}
    @else
        {{ $attributes->merge(['class' => 'transition hover:text-primary focus:text-primary']) }}
    @endif
>
    {{ $slot }}
</a>
