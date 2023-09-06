<div class="sidebar sidebar-panel print:hidden">
    <div class="flex h-full grow flex-col border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-750">
        <div class="flex items-center justify-between px-3 pt-4">
            <!-- Application Logo -->
            <div class="flex">
                <a href="/">
                    <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                        src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                </a>
            </div>
            <button @click="$store.global.isSidebarExpanded = false"
                class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </div>
        <div class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6 mt-5" x-data="{ expandedItem: null }" x-init="$el._x_simplebar = new SimpleBar($el);">
            @foreach ($allSidebarItems as $key => $menuItemsGroup)
                @if ($key > 0)
                    <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                @endif
                <h1 class="py-2 font-medium text-xs uppercase mx-4 text-gray-400 dark:text-navy-50">
                    {{ $menuItemsGroup['title'] }}
                </h1>
                @foreach ($menuItemsGroup['items'] as $menuItems)
                    <ul class="flex flex-1 flex-col px-4 font-inter gap-1">
                        @foreach ($menuItems as $keyMenu => $menu)
                            @if (isset($menu['submenu']))
                                <li x-data="accordionItem('{{ $keyMenu }}')"
                                    class="cursor-pointer select-none items-center rounded-md text-start leading-tight outline-none transition-all hover:bg-slate-100 hover:bg-opacity-80 hover:text-gray-900 focus:bg-slate-100 focus:bg-opacity-80 focus:text-gray-900 active:bg-gray-50 active:bg-opacity-80 active:text-gray-900"
                                >
                                    <a :class="expanded ? 'bg-slate-150 dark:bg-accent-light rounded-md' :
                                        'text-slate-600 dark:text-navy-200'"
                                        @click="expanded = !expanded"
                                        class="flex items-center justify-between px-3 py-2 tracking-wide  outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800  dark:hover:text-navy-50"
                                        href="javascript:void(0);">
                                        <span>{{ $menu['title'] }}</span>
                                        <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <ul x-collapse x-show="expanded">
                                        @foreach ($menu['submenu'] as $keyMenu => $submenu)
                                            <li
                                                @if ($submenu['route_name'] === $pageName) x-init="$el.scrollIntoView({block:'center'}); expanded = true" @endif>
                                                <a href="{{ route($submenu['route_name']) }}"
                                                    class="flex items-center justify-between p-3 tracking-wide
                                             outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4
                                             {{ $submenu['route_name'] === $pageName ? 'text-primary dark:text-accent-light font-medium' : 'text-slate-600 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50' }}">
                                                    <div class="flex items-center space-x-2">
                                                        <div
                                                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40">
                                                        </div>
                                                        <span>{{ $submenu['title'] }}</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                @if($menu['route_name'] === $pageName)
                                    <li x-init="$el.scrollIntoView({block:'center'});">
                                        <a href="#"
                                           class="flex items-center gap-2 rounded-md opacity-80 font-medium bg-gradient-to-l from-indigo-400 to-indigo-600 px-4 py-2 tracking-wide text-white outline-none transition-all">
                                            @isset($menu['icon'])
                                                <i class="{{ $menu['icon'] }}"></i>
                                            @endisset
                                            {{ $menu['title'] }}
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route($menu['route_name']) }}"
                                           class="flex items-center gap-2 rounded-md px-4 py-2 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            @isset($menu['icon'])
                                                <i class="{{ $menu['icon'] }}"></i>
                                            @endisset
                                            {{ $menu['title'] }}
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                @endforeach
            @endforeach

        </div>
    </div>
</div>
