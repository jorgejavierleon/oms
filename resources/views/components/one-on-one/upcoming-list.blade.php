@props(['participants' => null])

@if(!$participants)
    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-8">
            <p class="mb-2 text-lg font-medium text-gray-900 dark:text-white">No One on One planned for now</p>
            <p class="mb-5 text-base text-gray-500 dark:text-gray-400">
                You can schedule a One on One with your team members
            </p>
        </div>
    </div>
@endif
<x-general.section-title icon="fluentui-calendar-clock-24-o" class="lg:text-lg pb-4">
    Upcoming
</x-general.section-title>
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
    @foreach($participants as $participant)
        <div class="card items-center justify-between lg:flex-row">
            <div class="flex flex-col items-center p-4 text-center sm:p-5 lg:flex-row lg:space-x-4 lg:text-left">
                <x-general.avatar :user="$participant['user']" class="h-18 w-18 lg:h-12 lg:w-12" />
                <div class="mt-2 lg:mt-0">
                    <div class="flex items-center justify-center space-x-4">
                        <h4 class="text-base font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                            {{ $participant['user']->name }}
                        </h4>
                        <div class="badge rounded-full border border-slate-300 dark:border-navy-450 dark:text-navy-50">
                            Planning
                        </div>
                    </div>
                    <p class="text-xs+">React Developer</p>
                </div>
                <button
                    class="btn mt-4 rounded-full border border-slate-200 font-medium text-primary hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-500 dark:text-accent-light dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90 lg:hidden">
                    Follow
                </button>
            </div>
        </div>
    @endforeach
</div>
