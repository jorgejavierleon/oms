<div>
    <x-general.page-title title="One on One" />
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        {{-- Left panel --}}
        <div class="col-span-12 lg:col-span-8 xl:col-span-9">
            <section>
                <x-general.section-title icon="fluentui-calendar-clock-24-o" class="pb-4">
                    Upcoming
                </x-general.section-title>
                <div x-data="{activeTab:'tabManagers'}" class="tabs flex flex-col">
                    <div class="is-scrollbar-hidden overflow-x-auto">
                        <div class="border-b-2 border-slate-150 dark:border-navy-500">
                            <div class="tabs-list flex gap-7">
                                <button
                                    @click="activeTab = 'tabManagers'"
                                    :class="activeTab === 'tabManagers' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium"
                                >
                                    With my managers
                                </button>
                                <button
                                    @click="activeTab = 'tabReporters'"
                                    :class="activeTab === 'tabReporters' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium"
                                >
                                    With my directs reporters
                                </button>
                                <button
                                    @click="activeTab = 'tabTeam'"
                                    :class="activeTab === 'tabTeam' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                    class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium"
                                >
                                    With the team
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content pt-6">
                        <div
                            x-show="activeTab === 'tabManagers'"
                            x-transition:enter="transition-all duration-500 easy-in-out"
                            x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        >
                            <x-one-on-one.upcoming-list :participants="$managers"/>
                        </div>
                        <div
                            x-show="activeTab === 'tabReporters'"
                            x-transition:enter="transition-all duration-500 easy-in-out"
                            x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        >
                            <x-one-on-one.upcoming-list :participants="$reporters"/>
                        </div>
                        <div
                            x-show="activeTab === 'tabTeam'"
                            x-transition:enter="transition-all duration-500 easy-in-out"
                            x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        >
                            <x-one-on-one.upcoming-list :participants="$managers"/>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-10">
                <x-one-on-one.table-list />
            </section>
        </div>
        {{-- Right panel --}}
        <div class="col-span-12 lg:col-span-4 xl:col-span-3">
            <x-general.section-title icon="fluentui-task-list-ltr-24-o" class="pb-4">
                One on One Tasks
            </x-general.section-title>
            <x-one-on-one.task-list />
        </div>
    </div>

</div>
