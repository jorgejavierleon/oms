<div>
    <x-page-title title="Employees" />
    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <!-- Users Table -->
        <div>
            <x-table.top-bar />
            <div class="card mt-3">
                <div
                    class="is-scrollbar-hidden min-w-full overflow-x-auto"
                    x-data="pages.tables.initExample1"
                >
                    <table class="is-hoverable w-full text-left">
                        <thead>
                        <tr>
                            <th
                                class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                Employee
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                Email
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                Position
                            </th>
                            <th
                                class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                Status
                            </th>
                            <th
                                class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                            >
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                >
                                    <td
                                        class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                        {{ $user->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        {{ $user->email }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-3 font-medium text-slate-700 dark:text-navy-100 lg:px-5">
                                        {{ $user->position->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <label class="inline-flex items-center">
                                            <input
                                                class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                                                type="checkbox"
                                            />
                                        </label>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div
                                            x-data="usePopper({placement:'bottom-end',offset:4})"
                                            @click.outside="if(isShowPopper) isShowPopper = false"
                                            class="inline-flex"
                                        >
                                            <button
                                                x-ref="popperRef"
                                                @click="isShowPopper = !isShowPopper"
                                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="h-5 w-5"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                                    />
                                                </svg>
                                            </button>

                                            <div
                                                x-ref="popperRoot"
                                                class="popper-root"
                                                :class="isShowPopper && 'show'"
                                            >
                                                <div
                                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                                                >
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                            >Action</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                            >Another Action</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                            >Something else</a
                                                            >
                                                        </li>
                                                    </ul>
                                                    <div
                                                        class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                                                    ></div>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                            >Separated Link</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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
