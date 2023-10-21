@props([
  'href',
  'type' => 'button',
  'buttonClasses',
  'classes' => 'btn font-medium '. $buttonClasses,
])
@isset ($href)
    <a
        {{ $attributes }}
        href="{{ $href }}"
        class="{{ $classes }}"
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes }}
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>
@endisset
