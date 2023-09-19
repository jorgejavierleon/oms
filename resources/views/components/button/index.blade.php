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
        class="{{ $classes }}"
    >
        {{ $slot }}
    </button>
@endisset
