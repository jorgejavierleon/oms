<div>
    <x-general.page-title title="Edit" :breadcrums="[
            route('meetings.one_on_one') => 'One On Ones',
            '#' => $oneOnOne->title,
        ]"
    />
    <div class="grid grid-col-1">
        <div class="card p-6">
            {{-- Header --}}
            <div class="flex pt-1 h-8 items-center justify-between">
                <h2 class="text-xl font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    {{ $oneOnOne->title }}
                </h2>
                <x-button.primary>
                    Mark as complete
                </x-button.primary>
            </div>
            <x-general.divider />
            {{-- Talkin Points --}}
            <section>
                <div class="pb-4 pt-2 flex items-center justify-between">
                    <x-general.section-title>
                        Talking Points
                    </x-general.section-title>
                    <x-general.link
                        type="primary"
                        href="#"
                        @click="$dispatch('show-drawer', { drawerId: 'suggestions-drawer' })"
                    >
                        <div class="flex items-center">
                            @svg('fluentui-lightbulb-24-o', 'h-5 w-5 mr-1')
                            Show suggestions
                        </div>
                    </x-general.link>
                </div>
                <livewire:meeting.talking-point.talking-point-list
                    :meeting="$oneOnOne"
                />
            </section>
            {{-- Actions --}}
            <section class="pt-4">
                <div class="pb-4 pt-2 flex items-center justify-between">
                    <x-general.section-title>
                        Action Items
                    </x-general.section-title>
                </div>
                <livewire:meeting.action.action-list
                    :meeting="$oneOnOne"
                />
            </section>
            {{-- Notes --}}
            <section class="pt-4">
                <div class="pb-4 pt-2 flex items-center justify-between">
                    <x-general.section-title>
                        Notes
                    </x-general.section-title>
                </div>
                <livewire:meeting.note.note-list
                    :meeting="$oneOnOne"
                />
            </section>
        </div>
    </div>
    {{-- Suggestions Slide Over --}}
    <x-drawer drawerId="suggestions-drawer">
        <x-slot:title>
            <h2 class="text-xl font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100" id="slide-over-title">
                Suggestions
            </h2>
        </x-slot:title>
        <x-slot:body>
            <x-one-on-one.talking-point-suggestions />
        </x-slot:body>
    </x-drawer>
</div>
