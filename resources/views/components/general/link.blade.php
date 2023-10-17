@props([
    'type' => 'default',
    'icon' => null,
])
<a
    @if ($type === 'primary')
        {{ $attributes->merge(['class' => 'transition text-primary hover:text-primary/80 focus:text-primary/80']) }}
    @else
        {{ $attributes->merge(['class' => 'transition hover:text-primary focus:text-primary']) }}
    @endif
>
    <div class="flex items-center">
        @if($icon)
            @svg($icon, 'h-5 w-5 mr-1')
        @endif
        {{ $slot }}
    </div>
</a>
