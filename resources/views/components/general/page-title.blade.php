<div class="flex items-center space-x-4 py-5 md:py-8">
    <h2 class="text-xl font-medium text-slate-600 dark:text-navy-50">
        {{ $title }}
    </h2>
    @isset($breadcrums)
        <div class="my-1 hidden w-px self-stretch bg-slate-300 dark:bg-navy-600 sm:flex"></div>
        <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            @foreach($breadcrums as $link => $title)
                @if($link != '#')
                    <li class="flex items-center space-x-2">
                        <a
                            class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="{{ $link }}"
                        >
                            {{ $title }}
                        </a>
                        <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </li>
                @else
                    <li>
                        <a href="#">
                            {{$title}}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endisset
</div>
