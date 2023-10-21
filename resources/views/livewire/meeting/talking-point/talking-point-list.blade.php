<div>
    <div class="flex flex-col space-y-2">
        @foreach($meeting->talkingPoints as $talkingPoint)
            <livewire:meeting.talking-point.talking-point-item
                :talkingPoint="$talkingPoint"
                :wire:key="$talkingPoint->id"
            />
        @endforeach
    </div>
    {{-- Create new talking point--}}
    <div
        x-data="{ openNewTalkingPoint: false }"
    >
        <form wire:submit.prevent="postTalkingPoint" x-show="openNewTalkingPoint" class="py-3">
            <label for="new-talking-point"></label>
            <input
                id="new-talking-point"
                wire:model="newTalkingPoint"
                placeholder="Add a talking point"
                x-ref="newTalkingPointInput"
                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            />
            <div class="mt-3">
                <x-button.primary type="submit">
                    Save
                </x-button.primary>
                <x-button.default
                    type="button"
                    @click.prevent="openNewTalkingPoint = false"
                >
                    Cancel
                </x-button.default>
            </div>
        </form>
        <div class="flex mt-6 pb-2" x-show="! openNewTalkingPoint">
            {{-- TODO fix the focus. it works sometimes --}}
            <x-general.link
                type="primary"
                href="#"
                icon="fluentui-add-24"
                @click="
                    openNewTalkingPoint = ! openNewTalkingPoint;
                    await $nextTick();
                    $refs.newTalkingPointInput.focus();
                "
            >
                Add a talking point
            </x-general.link>
        </div>
    </div>
</div>
