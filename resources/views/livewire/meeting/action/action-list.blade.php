<div>
    <div class="flex flex-col space-y-2">
        @foreach($meeting->actionItems as $actionItem)
            <livewire:action.action-item-show
                :actionItem="$actionItem"
                :key="$actionItem->id"
                :showOrigen="false"
            />
        @endforeach
    </div>
    <div class="flex mt-6 pb-2">
        <x-general.link
            type="primary"
            href="#"
            icon="fluentui-add-24"
            @click="$dispatch('show-create-action-item')"
        >
            Add a new action item
        </x-general.link>
    </div>
    {{-- Modals --}}
    <livewire:action.action-item-upsert :meeting="$meeting" />
</div>
