<div>
    <x-page-title title="Employees" />
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
                                x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
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
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-4.5 w-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                />
                            </svg>
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
                                >
                                    <x-table.td>
                                        <div class="flex items-center gap-3">
                                            <div class="avatar flex">
                                                <img
                                                    class="rounded-full"
                                                    src="{{asset('images/100x100.png')}}"
                                                    alt="avatar"
                                                />
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <span class="font-medium text-slate-600 dark:text-navy-100">
                                                    {{ $user->name }}
                                                </span>
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
                                        <div class="flex gap-4 items-center text-lg font-light text-slate-400">
                                            <a href="#">
                                                <i class="fa fa-magnifying-glass"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pen-to-square"></i>
                                            </a>
                                        </div>
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
