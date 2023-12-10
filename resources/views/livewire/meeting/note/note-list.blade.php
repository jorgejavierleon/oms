<div>
    <div class="flex flex-col space-y-2">
        @foreach($notes as $note)
            <p>{{$note->content}}</p>
        @endforeach
    </div>
    {{-- Create new note--}}
    <div
        x-data="{ openNewNote: false }"
    >
        <form wire:submit.prevent="postNote" x-show="openNewNote" class="py-3">
            <label for="new-note"></label>
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
                    <textarea type="text" wire:model="newNoteContent"></textarea>
                </div>
            </div>
            <div class="mt-3">
                <x-button.primary type="submit">
                    Save
                </x-button.primary>
                <x-button.default
                    type="button"
                    @click.prevent="openNewNote = false"
                >
                    Cancel
                </x-button.default>
            </div>
        </form>
        <div class="flex mt-6 pb-2" x-show="! openNewNote">
            {{-- TODO fix the focus. it works sometimes --}}
            <x-general.link
                type="primary"
                href="#"
                icon="fluentui-add-24"
                @click="
                    openNewNote = ! openNewNote;
                    await $nextTick();
                    $refs.newNoteInput.focus();
                "
            >
                Add a note
            </x-general.link>
        </div>
    </div>
</div>
