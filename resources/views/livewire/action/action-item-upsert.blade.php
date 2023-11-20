<x-modal
    @open-action-item-upsert-modal.window="showModal = true"
    @close-action-item-upsert-modal.window="showModal = false"
>
    <x-slot name="title">
        <x-modal.title>
            {{$this->isEdit ? 'Edit' : 'Create' }} Action Item
        </x-modal.title>
    </x-slot>
    <x-slot name="body">
        <form wire:submit="save">
            <div class="space-y-4">
                <div class="grid sm:grid-cols-1">
                    <x-input.text wire:model="form.title" label="Title"/>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <x-input.select wire:model="form.responsable_id" label="Responsable">
                        <option value=""></option>
                        @foreach($responsables as $id => $responsable)
                            <option wire:key="{{$id}}" value="{{$id}}">{{$responsable}}</option>
                        @endforeach
                    </x-input.select>
                    <x-input.datepicker wire:model="form.due_date" label="Due Date"/>
                </div>
                <div>
                    <span>Description</span>
                    <div class="mt-1.5 w-full">
                        <div class="h-36" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline'],
                                        [
                                            { list: 'ordered' },
                                            { list: 'bullet' },
                                            { header: 1 },
                                            { background: [] },
                                        ],
                                    ],
                                },
                                theme: 'snow'
                            })">
                            <textarea type="text" wire:model="form.description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-x-2 text-right mt-8">
                <x-button.outlined type="button" @click="showModal = false" wire:click="cancel">
                    Cancel
                </x-button.outlined>
                <x-button.primary type="submit">
                    Save
                </x-button.primary>
            </div>
        </form>
    </x-slot>
</x-modal>
