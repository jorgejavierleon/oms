<div x-data="{openEditForm: $wire.entangle('openEditForm')}">
    <div class="flex grow items-start gap-x-3">
        <div class="flex grow items-center space-x-1">
            <label class="flex">
                <input
                    type="checkbox"
                    wire:model="talkingPointIsChecked"
                    wire:click="toggleTalkingPointIsChecked"
                       class="form-checkbox is-basic h-6 w-6 rounded-full border-slate-400/70 checked:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                />
            </label>
            <div
                class="grow p-2 rounded-md hover:bg-indigo-50/50 hover:cursor-pointer transition duration-300"
                @click="
                    openEditForm = ! openEditForm;
                    await $nextTick();
                    $refs.talkingPointInput.focus();
                "
                x-show="!openEditForm"
            >
                <h2 class="text-slate-700 line-clamp-1 dark:text-navy-100 ">
                    {{ $talkingPoint->description }}
                </h2>
            </div>
            <div
                x-show="openEditForm"
                class="flex grow space-x-2"
                @click.outside="openEditForm = false"
            >
                <form wire:submit.prevent="editTalkingPoint" class="grow">
                    <input
                        id="description"
                        wire:model="description"
                        class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        x-ref="talkingPointInput"
                        autocomplete="off"
                    />
                </form>
                <x-button.icon
                    wire:click="editTalkingPoint"
                    x-tooltip="'Save'"
                >
                    @svg('fluentui-checkmark-24-o')
                </x-button.icon>
                <button
                    type="button"
                    wire:click="cancelEditTalkingPoint"
                    x-tooltip="'Cancel'"
                >
                    @svg('fluentui-arrow-reset-20-o')
                </button>
            </div>
            <div>
                <x-dropdown>
                    <ul>
                        <li>
                            <x-dropdown.link>
                                @svg('fluentui-document-lock-24-o')
                                Add private note
                            </x-dropdown.link>
                        </li>
                        <li>
                            <x-dropdown.link
                                wire:click="$dispatch('delete-talking-point', { talkingPointId: {{ $talkingPoint->id }} })"
                            >
                                @svg('fluentui-delete-24-o')
                                Delete talking point
                            </x-dropdown.link>
                        </li>
                    </ul>
                </x-dropdown>
            </div>
        </div>
    </div>

</div>
