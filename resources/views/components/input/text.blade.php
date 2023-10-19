@props([
    'type' => 'text',
    'label' => '',
    'placeholder' => '',
    'required' => false,
])
<div class="{{$attributes->get('class')}}">
    <label
        class="block"
        for="{{$attributes->whereStartsWith('wire:model')->first()}}"
    >
        <span class="text-slate-500/80">{{$label}}</span>
        <input
            id="{{$attributes->whereStartsWith('wire:model')->first()}}"
            {{$attributes->whereStartsWith('wire:model')}}
            {{$attributes->whereStartsWith('x-ref')}}
            type="{{$type}}"
            {{$required ? 'required' : ''}}"
            @error($attributes->whereStartsWith('wire:model')->first())
                class="form-input mt-1.5 w-full rounded-lg border border-error bg-transparent px-3 py-2 placeholder:text-slate-400/70"
            @else
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            @enderror

            placeholder="{{$placeholder}}"
        />
    </label>
    @error($attributes->whereStartsWith('wire:model')->first())
        <span class="text-xs text-error">{{$message}}</span>
    @enderror
</div>
