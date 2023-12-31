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
                class="grow p-2 rounded-md hover:bg-indigo-50/50 hover:cursor-pointer transition duration-300"
                wire:click="$dispatch('show-edit-action-item', { actionItemId: {{ $actionItem->id }} })"
            >
                <h2 class="text-slate-700 line-clamp-1 dark:text-navy-100 ">
                    {{ $actionItem->title }}
                </h2>
            </div>
            <div
                class="flex items-center space-x-4 cursor-pointer"
                wire:click="$dispatch('show-edit-action-item', { actionItemId: {{ $actionItem->id }} })"
            >
                {{-- Due date --}}
                @if($actionItem->due_date)
                    <span @class([
                    'text-xs',
                    'text-error' => $actionItem->dueDateColor() === 'red',
                    'text-warning' => $actionItem->dueDateColor() === 'yellow',
                    ])>
                        {{$actionItem->due_date?->format('D, M d')}}
                    </span>
                @endif
                {{-- Responsable --}}
                <div class="flex items-center">
                    <x-general.avatar :user="$actionItem->responsable" class="h-7 w-7 ring-2 ring-white"/>
                </div>
            </div>

            <div>
                <x-dropdown>
                    <ul>
                        <li>
                            <x-dropdown.link
                                @click="$dispatch('show-edit-action-item', { actionItemId: {{ $actionItem->id }} })"
                            >
                                @svg('fluentui-edit-24-o', 'w-5 h-5')
                                Edit action item
                            </x-dropdown.link>
                            <x-dropdown.link
                                wire:click="$dispatch('delete-action-item', { actionItemId: {{ $actionItem->id }} })"
                            >
                                @svg('fluentui-delete-24-o', 'w-5 h-5')
                                Delete action item
                            </x-dropdown.link>
                        </li>
                    </ul>
                </x-dropdown>
            </div>
        </div>
    </div>
</div>
