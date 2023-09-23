<div
    x-data="{showModal:false}"
    @edit-employee.window="showModal = true"
>
    <template x-teleport="body">
        <div
            class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
            x-show="showModal"
            role="dialog"
            @keydown.window.escape="showModal = false"
        >
            <div
                class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                @click="showModal = false"
                x-show="showModal"
                x-transition:enter="ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            ></div>
            <div
                class="relative w-full max-w-3xl origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                x-show="showModal"
                x-transition:enter="easy-out"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="easy-in"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            >
                {{-- Header --}}
                <div
                    class="flex justify-end rounded-t-lg px-4 py-3 sm:px-5"
                >
                    <button
                        @click="showModal = !showModal"
                        class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4.5 w-4.5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            ></path>
                        </svg>
                    </button>
                </div>
                <h3 class="text-xl text-center font-medium text-slate-700 dark:text-navy-100">
                    Edit Employee Information
                </h3>
                {{-- Body --}}
                <form wire:submit="edit">
                    <div class="px-4 py-4 sm:px-5">
                        <div class="mt-4 space-y-4">
                            {{ $this->form }}
                            <div class="space-x-2 pt-8 text-right">
                                <x-button.outlined @click="showModal = false">
                                    Cancel
                                </x-button.outlined>
                                <x-button.primary type="submit">
                                    Save
                                </x-button.primary>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </template>
</div>
