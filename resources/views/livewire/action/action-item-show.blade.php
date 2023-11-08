<div>
    <div class="flex grow items-start gap-x-3">
        <div class="flex grow items-center space-x-1">
            <label class="flex">
                <input
                    type="checkbox"
                    wire:model="actionItemIsCompleted"
                    wire:click="toggleActionItemIsCompleted"
                    class="form-checkbox is-basic h-6 w-6 rounded border-slate-400/70 checked:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                />
            </label>
            <div
                class="grow p-2 rounded-md hover:bg-indigo-50 hover:cursor-pointer transition duration-300"
            >
                <h2 class="text-slate-700 line-clamp-1 dark:text-navy-100 ">
                    {{ $actionItem->title }}
                </h2>
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
                                wire:click="$dispatch('delete-action-item', { actionItemId: {{ $actionItem->id }} })"
                            >
                                @svg('fluentui-delete-24-o')
                                Delete action item
                            </x-dropdown.link>
                        </li>
                    </ul>
                </x-dropdown>
            </div>
        </div>
    </div>
</div>
