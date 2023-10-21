<div>
    <x-general.page-title title="Employees" />
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <!-- Users Table -->
        <div>
            <!-- Top bar -->
            <div class="flex items-center justify-end">
                <div class="flex">
                    <div class="flex items-center" x-data="{isInputActive:false}">
                        <label class="block">
                            <input
                                wire:model.live="search"
                                x-effect="isInputActive === true && $nextTick(() => { $el.focus()})"
                                :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                                class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                                placeholder="Search here..."
                                type="text"
                            />
                        </label>
                        <button
                            @click="isInputActive = !isInputActive"
                            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                        >
                            @svg('fluentui-search-24-o')
                        </button>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div
                    class="is-scrollbar-hidden min-w-full overflow-x-auto"
                >
                    <table class="is-hoverable w-full text-left">
                        <thead>
                            <tr>
                                <x-table.th class="rounded-tl-lg">Employee</x-table.th>
                                <x-table.th>Position</x-table.th>
                                <x-table.th>Teams</x-table.th>
                                <x-table.th>Status</x-table.th>
                                <x-table.th class="rounded-tr-lg">Action</x-table.th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                    wire:key="user-{{$user->id}}"
                                >
                                    <x-table.td>
                                        <div class="flex items-center gap-3">
                                            <x-general.avatar :user="$user" />
                                            <div class="flex flex-col gap-1">
                                                <x-general.link
                                                    href="{{route('organization.employees.show', $user)}}"
                                                    wire:navigate
                                                    class="font-medium text-slate-600 dark:text-navy-100"
                                                >
                                                    {{ $user->name }}
                                                </x-general.link>
                                                <small class="text-xs">
                                                    {{ $user->email }}
                                                </small>
                                            </div>
                                        </div>
                                    </x-table.td>
                                    <x-table.td>
                                        {{ $user->position->name }}
                                    </x-table.td>
                                    <x-table.td>
                                        <div class="flex space-x-2">
                                            @foreach($user->teams as $team)
                                                <div class="badge rounded-full border">
                                                    {{ $team->name }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </x-table.td>
                                    <x-table.td>
                                        <label class="inline-flex items-center">
                                            <input
                                                class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                                type="checkbox"
                                            />
                                        </label>
                                    </x-table.td>
                                    <x-table.td>
                                        <x-dropdown>
                                            <ul>
                                                <li>
                                                    <x-dropdown.link
                                                        href="{{route('organization.employees.show', $user)}}"
                                                        wire:navigate
                                                    >
                                                        @svg('fluentui-search-24-o')
                                                        View
                                                    </x-dropdown.link>
                                                </li>
                                                <li>
                                                    <x-dropdown.link
                                                        href="{{route('organization.employees.edit', $user)}}"
                                                    >
                                                        @svg('fluentui-edit-24-o', 'h-5 w-5')
                                                        Edit
                                                    </x-dropdown.link>
                                                </li>
                                            </ul>
                                        </x-dropdown>
                                    </x-table.td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
