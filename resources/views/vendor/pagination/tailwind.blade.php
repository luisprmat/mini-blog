@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="mx-auto mt-4 flex max-w-6xl justify-between text-sm text-slate-500 dark:text-slate-400">
        {{-- Previous button --}}
        @if ($paginator->onFirstPage())
            <span class="flex items-center rounded bg-slate-200 text-slate-400 px-3 py-2 shadow dark:bg-slate-900 dark:text-slate-600">
                <svg
                    class="mr-2 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"
                    ></path>
                </svg>
                {{ __('pagination.previous') }}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center rounded bg-white px-3 py-2 shadow duration-300 hover:bg-slate-100 hover:shadow-md active:shadow-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:active:bg-slate-900">
                <svg
                    class="mr-2 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"
                    ></path>
                </svg>
                {{ __('pagination.previous') }}
            </a>
        @endif

        {{-- Pagination Elements --}}
        <div class="hidden md:flex">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true" class="flex items-center bg-white px-4 py-2 shadow dark:bg-slate-900">
                        <svg
                            class="w-4"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
                            ></path>
                        </svg>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page"
                                @class([
                                    'rounded-l' => $page === 1,
                                    'rounded-r' => $page === $paginator->lastPage(),
                                    'border border-sky-500 px-4 py-2 font-medium text-sky-500'
                                ])
                            >{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                @class([
                                    'rounded-l' => $page === 1,
                                    'rounded-r' => $page === $paginator->lastPage(),
                                    'bg-white px-4 py-2 shadow duration-300 hover:bg-slate-100 hover:shadow-md active:shadow-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:active:bg-slate-900'
                                ])
                            >
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Button --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center rounded bg-white px-3 py-2 shadow duration-300 hover:bg-slate-100 hover:shadow-md active:shadow-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:active:bg-slate-900">
                {{ __('pagination.next') }}
                <svg
                    class="ml-2 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                    ></path>
                </svg>
            </a>
        @else
            <span class="flex items-center rounded bg-slate-200 text-slate-400 px-3 py-2 shadow dark:bg-slate-900 dark:text-slate-600">
                {{ __('pagination.next') }}
                <svg
                    class="ml-2 w-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                    ></path>
                </svg>
            </span>
        @endif
    </nav>

    {{-- Messages of Count Items and Pages --}}
    <div class="mx-auto mt-4 max-w-6xl text-sm text-slate-500 dark:text-slate-400">
        <p class="leading-5">
            {!! __('Showing') !!}
            @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
            @else
                {{ $paginator->count() }}
            @endif
            {!! __('of') !!}
            <span class="font-medium">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </p>
    </div>
@endif
