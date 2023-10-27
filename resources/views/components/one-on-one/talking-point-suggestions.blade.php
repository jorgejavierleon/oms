<div class="relative flex-1">
    @foreach($this->suggestions as $suggestion)
        <div
            class="pb-4 flex flex-col"
        >
            <div
                class="group block max-w-sm p-4 bg-gray-50 border border-gray-200 rounded-lg shadow transition hover:bg-white dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 cursor-pointer"
                wire:click="addTalkingPointSuggestion({{ $suggestion->id }})"
            >
                <div class="flex">
                    <span class="pr-1 pt-1 text-yellow-400 group-hover:text-blue-500">
                        @svg('fluentui-add-24-o', 'h-5 w-5 mr-1')
                    </span>
                    <p class="text-sm text-gray-700 dark:text-gray-700">
                        {{ $suggestion->description }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="grid justify-items-center pt-4 ">
        <a href=""
           class="flex items-center justify-center gap-1 text-gray-600 hover:text-gray-500"
           wire:click.prevent="refreshSuggestions"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            Refresh suggestions
        </a>
    </div>
</div>
