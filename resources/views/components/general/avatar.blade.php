@props([
    'user',
    'avatarClass' => 'rounded-full',
])
@php
    $imageUrl = $user->getAvatarUrlOrNull();
@endphp
<div
    {{ $attributes->merge(['class' => 'avatar']) }}
    @if($imageUrl)
        <img
            class="{{$avatarClass}}"
            src="{{$imageUrl}}"
            alt="avatar"
        />
    @else
        <div
            class="is-initial bg-primary text-base uppercase text-white dark:bg-accent {{ $avatarClass }}"
        >
            {{$user->getInitials()}}
        </div>
    @endif
</div>
