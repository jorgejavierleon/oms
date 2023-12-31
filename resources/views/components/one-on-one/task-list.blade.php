<div class="card px-4 pt-2 pb-4">
    <div x-init="Sortable.create($el, {
                animation: 200,
                easing: 'cubic-bezier(0, 0, 0.2, 1)',
                direction: 'vertical',
                delay: 150,
                delayOnTouchOnly: true,
            })">
        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input type="checkbox" checked @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Design UI
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Today</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>06:00</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-success">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Low</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>

                    <div class="avatar h-6 w-6">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                             alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Lorem ipsum dolor.
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Today</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>10:00</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-warning">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Medium</span>
                    </div>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-info">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Update</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Chat App fragment.
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Today</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>11:00</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-error">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>High</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: true }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                    <div class="avatar h-6 w-6">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                             alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input checked type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Unit Testing
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Tomorrow</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>14:00</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-info">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Update</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                    <div class="avatar h-6 w-6">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                             alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aliquid minus numquam vero.
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Tomorrow</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>08:00</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-error">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>High</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                    <div class="avatar h-6 w-6">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                             alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Launch new home page
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Tomorrow</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>10:30</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-warning">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Medium</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: true }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                    <div class="avatar h-6 w-6">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                             alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Review Announcement Blog
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Tomorrow</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>12:00</span>
                            </span>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <div class="badge space-x-2.5 px-1 text-success">
                        <div class="h-2 w-2 rounded-full bg-current"></div>
                        <span>Low</span>
                    </div>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                    <div class="avatar h-6 w-6">
                        <img class="rounded-full" src="{{ asset('images/100x100.png') }}"
                             alt="avatar" />
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-slate-150 py-3 dark:border-navy-500"
             @click="$dispatch('show-drawer', { drawerId: 'edit-todo-drawer' })">
            <div class="flex items-center space-x-2 sm:space-x-3">
                <label class="flex">
                    <input checked type="checkbox" @click.stop
                           class="form-checkbox is-outline h-5 w-5 rounded-full border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent" />
                </label>
                <h2 class="cursor-pointer text-slate-600 line-clamp-1 dark:text-navy-100">
                    Check Email
                </h2>
            </div>
            <div class="mt-1 flex items-end justify-between">
                <div class="flex flex-wrap items-center font-inter text-xs">
                    <p>Every Day</p>
                    <div class="m-1.5 w-px self-stretch bg-slate-200 dark:bg-navy-500"></div>
                    <span class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span>07:00</span>
                            </span>
                </div>
                <div class="flex items-center space-x-1">
                    <button x-data="{ isImportant: false }" @click.stop="isImportant =! isImportant"
                            class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg"
                             class="h-5.5 w-5.5 text-primary dark:text-accent" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
