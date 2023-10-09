<div>
    <x-general.page-title title="Employee Info" :breadcrums="[
            route('organization.employees.list') => 'Employees',
            '#' => $user->name,
        ]"
    />
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        <div class="col-span-12 md:col-span-4">
            <div class="card p-6 ">
                {{-- User avatar --}}
                <div class="flex grow flex-col items-center pb-5 sm:px-5">
                    <div class="avatar h-24 w-24 ">
                        <img class="rounded-lg" src="{{url($user->getAvatarUrl())}}" alt="avatar"/>
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
                            @svg('fluentui-checkmark-24', 'h-5 w-5')
                        </div>
                        <div class="flex flex-col">
                            <span class=" font-medium text-slate-500 dark:text-navy-100">120</span>
                            <span class="text-xs dark:text-navy-200">Tasks done</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="badge bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                            @svg('fluentui-briefcase-24', 'h-5 w-5')
                        </div>
                        <div class="flex flex-col">
                            <span class="font-medium text-slate-600 dark:text-navy-100">6</span>
                            <span class="text-xs dark:text-navy-200">Projects</span>
                        </div>
                    </div>
                </div>
                <x-general.divider class="my-6"/>
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
                <x-general.divider class="my-6"/>
                {{-- Buttons --}}
                <div x-data class="flex justify-center gap-3">
                    <x-button.primary
                        href="{{route('organization.employees.edit', $user)}}"
                    >
                        Edit
                    </x-button.primary>
                    <x-button.error-soft>Suspended</x-button.error-soft>
                </div>
            </div>
        </div>
        {{-- right pannel --}}
        <div class="col-span-12 md:col-span-8">
            <div x-data="{activeTab:'tabOrganization'}" class="tabs flex flex-col">
                <div class="is-scrollbar-hidden">
                    <div class="tabs-list -mb-0.5 flex">
                        <button
                            @click="activeTab = 'tabOrganization'"
                            :class="activeTab === 'tabOrganization' ? 'bg-primary border-primary dark:border-accent text-white dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                            class="btn shrink-0 space-x-2 px-3 py-2 font-medium"
                        >
                            @svg('fluentui-organization-24-o', 'h-5 w-5')
                            <span>Organization</span>
                        </button>
                        <button
                            @click="activeTab = 'tabActivity'"
                            :class="activeTab === 'tabActivity' ? 'bg-primary border-primary dark:border-accent text-white dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                            class="btn shrink-0 space-x-2 px-3 py-2 font-medium"
                        >
                            @svg('fluentui-tasks-app-24-o', 'h-5 w-5')
                            <span>Activity</span>
                        </button>
                        <button
                            @click="activeTab = 'tabMessages'"
                            :class="activeTab === 'tabMessages' ? 'bg-primary border-primary dark:border-accent text-white dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                            class="btn shrink-0 space-x-2 px-3 py-2 font-medium"
                        >
                            @svg('fluentui-mail-24-o', 'h-5 w-5')
                            <span> Messages </span>
                        </button>
                    </div>
                </div>
                <div class="tab-content pt-6">
                    <div
                        x-show="activeTab === 'tabOrganization'"
                        x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                    >
                        {{--Organization Info--}}
                        <div class="card px-4 py-4 sm:px-5">
                            <div>
                                <h3 class="pb-4 uppercase text-slate-400 dark:text-navy-300">
                                    Organization Information
                                </h3>
                                <dl class="divide-y divide-gray-100">
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="font-medium text-slate-600">Job Title</dt>
                                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                                            {{$user->position->name}}
                                        </dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="font-medium text-slate-600">Teams</dt>
                                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                                            @foreach($user->teams as $team)
                                                <span class="badge bg-info text-white">
                                                    {{$team->name}}
                                                </span>
                                            @endforeach
                                        </dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="font-medium text-slate-600">Managers</dt>
                                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                                            @foreach($user->managers as $manager)
                                                <x-general.link
                                                    type="primary"
                                                    href="{{route('organization.employees.show', $manager)}}"
                                                    wire:navigate
                                                >
                                                    {{$manager->name}}
                                                </x-general.link>
                                                {{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </dd>
                                    </div>
                                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                        <dt class="font-medium text-slate-600">Direct Reporters</dt>
                                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                                            @if(!$user->directReporters->count())
                                                <span class="text-slate-400">N/A</span>
                                            @endif
                                            @foreach($user->directReporters as $directReporter)
                                                <x-general.link
                                                    type="primary"
                                                    href="{{route('organization.employees.show', $directReporter)}}"
                                                    wire:navigate
                                                >
                                                    {{$directReporter->name}}
                                                </x-general.link>
                                                {{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    x-show="activeTab === 'tabActivity'"
                    x-transition:enter="transition-all duration-500 easy-in-out"
                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                >
                    <div class="card col-span-12 pb-4 sm:col-span-6">
                        <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Users Activity
                            </h2>
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })"
                                 @click.outside="if(isShowPopper) isShowPopper = false"
                                 class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                        class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
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
                        <ol class="timeline line-space px-4 [--size:1.5rem] sm:px-5">
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                    <i class="fa fa-user-edit text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            User Photo Changed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">12 minute ago</span>
                                    </div>
                                    <p class="py-1">John Doe changed his avatar photo</p>
                                    <div class="avatar mt-2 h-16 w-16">
                                        <img class="mask is-squircle" src="{{ asset('images/100x100.png') }}"
                                             alt="avatar"/>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-success dark:bg-navy-700">
                                    <i class="fa fa-leaf text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Design Completed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">3 hours ago</span>
                                    </div>
                                    <p class="py-1">
                                        Robert Nolan completed the design of the CRM application
                                    </p>
                                    <a href="#"
                                       class="inline-flex items-center space-x-1 pt-2 text-slate-600 transition-colors hover:text-primary dark:text-navy-100 dark:hover:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        <span>File_final.fig</span>
                                    </a>
                                    <div class="pt-2">
                                        <a href="#"
                                           class="tag rounded-full border border-secondary/30 bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:border-secondary-light/30 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            UI/UX
                                        </a>

                                        <a href="#"
                                           class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            CRM
                                        </a>

                                        <a href="#"
                                           class="tag rounded-full border border-success/30 bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            Dashboard
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-warning dark:bg-navy-700">
                                    <i class="fa fa-project-diagram text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            ER Diagram
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">Team completed the ER diagram app</p>
                                    <div>
                                        <p class="text-xs text-slate-400 dark:text-navy-300">
                                            Members:
                                        </p>
                                        <div class="mt-2 flex justify-between">
                                            <div class="flex flex-wrap -space-x-2">
                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                         src="{{ asset('images/100x100.png') }}" alt="avatar"/>
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <div
                                                        class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                        jd
                                                    </div>
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                         src="{{ asset('images/100x100.png') }}" alt="avatar"/>
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                         src="{{ asset('images/100x100.png') }}" alt="avatar"/>
                                                </div>

                                                <div class="avatar h-7 w-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                         src="{{ asset('images/100x100.png') }}" alt="avatar"/>
                                                </div>
                                            </div>
                                            <button
                                                class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M7 11l5-5m0 0l5 5m-5-5v12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-error dark:bg-navy-700">
                                    <i class="fa fa-history text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4 sm:pl-8">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Weekly Report
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">The weekly report was uploaded</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <div
                    x-show="activeTab === 'tabMessages'"
                    x-transition:enter="transition-all duration-500 easy-in-out"
                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                >
                    <div>
                        <p>
                            Etiam nec ante eget lacus vulputate egestas non iaculis tellus.
                            Suspendisse tempus ex in tortor venenatis malesuada. Aenean
                            consequat dui vitae nibh lobortis condimentum. Duis vel risus est.
                        </p>
                        <div class="flex space-x-2 pt-3">
                            <a
                                href="#"
                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light"
                            >
                                Tag 1
                            </a>
                            <a
                                href="#"
                                class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light"
                            >
                                Tag 2
                            </a>
                        </div>

                        <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                            dolore non atque?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
