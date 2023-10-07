@props(['icon' => null])
<h3
    {{ $attributes->merge([
        'class' => 'font-medium tracking-wide text-slate-500 line-clamp-1 dark:text-navy-100 lg:text-base'
    ]) }}
>
    <div class="flex items-center">
        @if($icon)
            @svg($icon, 'h-5 w-5 mr-1')
        @endif
        {{ $slot }}
    </div>
</h3>
