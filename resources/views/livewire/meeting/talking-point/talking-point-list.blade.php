<div>
    @foreach($meeting->talkingPoints as $talkingPoint)
        <livewire:meeting.talking-point.talking-point-item
            :talkingPoint="$talkingPoint"
            :wire:key="$talkingPoint->id"
        />
    @endforeach
    {{-- Create new talking point--}}
    <div
        x-data="{ openNewTalkingPoint: false }"
    >
        <form wire:submit.prevent="postTalkingPoint" x-show="openNewTalkingPoint" class="pb-3">
            <label for="new-talking-point"></label>
            <x-input.text wire:model="newTalkingPoint" />
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
            <x-general.link
                type="primary"
                href="#"
                icon="fluentui-add-24"
                @click.prevent="openNewTalkingPoint = ! openNewTalkingPoint"
            >
                Add a talking point
            </x-general.link>
        </div>
    </div>
</div>
