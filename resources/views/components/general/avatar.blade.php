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
            class="is-initial bg-slate-200 text-base uppercase text-slate-600 dark:bg-navy-500 dark:text-navy-100 {{ $avatarClass }}"
        >
            {{$user->getInitials()}}
        </div>
    @endif
</div>
