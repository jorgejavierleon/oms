<div
    x-data="{
        open: false,
        toggle() { this.open = this.open ? this.close() : true },
        close() { this.open = false }
    }"
    @keydown.escape.prevent.stop="close()"
    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
    class="m-2"
>
    {{-- Dropdown Button --}}
    <button
        x-ref="button"
        @click="toggle()"
        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
        type="button"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </button>
    {{-- Dropdown panel --}}
    <div
        x-ref="panel"
        x-show="open"
        x-transition.origin.top.left
        class="absolute mt-1"
        style="display: none"
        @click.outside="close()"
    >
        <div
            class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
            <ul>
                <li>
                    <a href="#"
                       class="flex gap-2 h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                        <i class="fa fa-magnifying-glass"></i>
                        View
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex gap-2 h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                    >
                        <i class="fa fa-pen-to-square"></i>
                        Edit
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
