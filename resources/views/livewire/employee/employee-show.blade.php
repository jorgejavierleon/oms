<div>
    <x-general.page-title title="Employee Info" :breadcrums="[
            route('organization.employees.list') => 'Employees',
            '#' => $user->name,
        ]"
    />
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 md:col-span-4">
            <div class="card px-6 pb-5 ">
                <div class="p-2 text-right">
                    <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                         class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>

                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                            Action</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                            else</a>
                                    </li>
                                </ul>
                                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                <ul>
                                    <li>
                                        <a href="#"
                                           class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                            Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- User avatar --}}
                <div class="flex grow flex-col items-center pb-5 sm:px-5">
                    <div class="avatar h-24 w-24 ">
                        <img class="rounded-lg" src="{{url($user->getAvatarUrl())}}" alt="avatar" />
                    </div>
                    <h3 class="pt-3 text-lg font-medium text-slate-700 dark:text-navy-100">
                        {{$user->name}}
                    </h3>
                    <p>{{$user->position->name}}</p>
                    <div class="inline-space mt-3 flex grow flex-wrap items-start">
                        <div class="badge bg-success/10 text-success dark:bg-success/15">Active</div>
                    </div>
                </div>
                {{-- User stats --}}
                <div class="mt-4 grid grid-cols-2 gap-2 justify-items-center">
                    <div class="flex items-center gap-2">
                        <div class="badge bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                            <x-heroicon-o-check />
                        </div>
                        <div class="flex flex-col">
                            <span class=" font-medium text-slate-500 dark:text-navy-100">120</span>
                            <span class="text-xs dark:text-navy-200">Tasks done</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="badge bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                            <x-heroicon-o-briefcase />
                        </div>
                        <div class="flex flex-col">
                            <span class="font-medium text-slate-600 dark:text-navy-100">6</span>
                            <span class="text-xs dark:text-navy-200">Projects</span>
                        </div>
                    </div>
                </div>
                <x-general.divider  class="my-6"/>
                {{-- User Details --}}
                <div>
                    <p class="pb-4 uppercase text-slate-400 dark:text-navy-300">
                        Details
                    </p>
                    <ul class="space-y-3">
                        <li>
                            <span class="font-medium text-slate-600">Trigram: </span>
                            <span>{{$user->trigram}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">Full name: </span>
                            <span>{{$user->name}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">Email: </span>
                            <span>{{$user->email}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">Phone: </span>
                            <span>{{$user->phone}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">Birthdate: </span>
                            <span>{{$user->birthdate}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">Country: </span>
                            <span>{{$user->country}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">City: </span>
                            <span>{{$user->city}}</span>
                        </li>
                        <li>
                            <span class="font-medium text-slate-600">Address: </span>
                            <span>{{$user->address}}</span>
                        </li>
                    </ul>
                </div>
                {{-- Buttons --}}
                <div x-data class="pt-8 flex justify-center gap-3">
                    <x-button.primary
                        @click="$dispatch('edit-employee')"
                    >
                        Edit
                    </x-button.primary>
                    <x-button.error-soft>Suspended</x-button.error-soft>
                </div>
            </div>
        </div>
    </div>
    <livewire:employee.employee-edit :user="$user" />
</div>
