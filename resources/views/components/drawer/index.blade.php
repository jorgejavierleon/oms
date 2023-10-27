@props([
    'drawerId',
])
<div x-show="showDrawer" x-data="{ showDrawer: false }"
     x-on:show-drawer.window="($event.detail.drawerId === '{{$drawerId}}') && (showDrawer = true)"
     @keydown.window.escape="showDrawer = false">
    <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200" @click="showDrawer = false"
         x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"></div>
    <div class="fixed right-0 top-0 z-[101] h-full w-96">
        <div class="flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-700"
             x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0" x-transition:leave="ease-in"
             x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
        >
            <div
                class="absolute cursor-pointer text-gray-600 top-0 w-8 h-8 flex items-center justify-center right-0 mt-5 mr-5"
                @click="showDrawer = false"
            >
                @svg('fluentui-dismiss-24-o', 'h-5 w-5')
            </div>
            <div class="px-4 sm:px-6 pt-5 pb-1">
                {{$title}}
            </div>
            <x-general.divider />
            <div class="px-4">
                {{$body}}
            </div>
        </div>
    </div>
</div>
