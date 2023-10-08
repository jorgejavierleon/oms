@props([
    'label' => '',
    'placeholder' => '',
    'required' => false,
    'multiple' => false,
])
<div class="{{$attributes->get('class')}}">
    <label
        class="block"
        for="{{$attributes->whereStartsWith('wire:model')->first()}}"
    >
        <span class="text-slate-500/80">{{$label}}</span>
        <select
            id="{{$attributes->whereStartsWith('wire:model')->first()}}"
            {{$attributes->whereStartsWith('wire:model')}}
            {{$required ? 'required' : ''}}"
            @if($multiple)
                multiple
            @endif
            @error($attributes->whereStartsWith('wire:model')->first())
                class="mt-1.5 w-full border border-error bg-transparent px-3 py-2 placeholder:text-slate-400/70"
            @else
            class="text-slate-500 mt-1.5 w-full placeholder:text-slate-400/70"
            @enderror
            placeholder="{{$placeholder}}"
            x-init="$el._tom = new Tom($el,{
                plugins: [{{$multiple ? '\'remove_button\'' : ''}}],
                create: false,
                sortField: {field: 'text',direction: 'asc'}
            })"
        >
            {{$slot}}
        </select>
    </label>
    @error($attributes->whereStartsWith('wire:model')->first())
        <span class="text-xs text-error">{{$message}}</span>
    @enderror
</div>
