<div class="mx-auto flex h-16 max-w-6xl items-center justify-between">
    {{-- Toggle Menu Button --}}
    <button x-data="{ menuIcon: 'open' }" x-on:click="$dispatch('toggle-menu'); menuIcon = menuIcon === 'open' ? 'close' : 'open'"
        class="-ml-1 rounded p-1 text-slate-500 hover:bg-sky-500 hover:text-slate-100 focus:ring-2 focus:ring-slate-200 dark:text-slate-400 dark:hover:text-slate-100 md:hidden">
        <svg x-show="menuIcon === 'open'"
            class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
            </path>
        </svg>
        <svg x-show="menuIcon === 'close'"
            class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    {{-- App Logo Full Screen --}}
    <a class="hidden text-sky-500 duration-200 hover:rotate-6 md:block" href="{{ route('home') }}">
        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
            <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
            </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
            </path>
        </svg>
    </a>

    <div class="-mr-4 flex items-center">
        {{-- App Logo Mobile --}}
        <a class="text-sky-500 duration-200 hover:rotate-6 md:hidden" href="{{ route('home') }}">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                </path>
            </svg>
        </a>

        {{-- Navigation Links --}}
        <div class="ml-8 hidden space-x-8 md:flex">
            <a class="py-2{{ request()->routeIs('home') ? ' text-sky-500' : ' text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-400' }} px-3"
                href="{{ route('home') }}">{{ __('Home') }}</a>
            <a class="py-2{{ request()->routeIs('posts.*') ? ' text-sky-500' : ' text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-400' }} px-3"
                href="{{ route('posts.index') }}">{{ __('Blog') }}</a>
            <a class="py-2{{ request()->routeIs('about') ? ' text-sky-500' : ' text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-400' }} px-3"
                href="{{ route('about') }}">{{ __('About') }}</a>
            <a class="py-2{{ request()->routeIs('contact') ? ' text-sky-500' : ' text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-400' }} px-3"
                href="{{ route('contact') }}">{{ __('Contact') }}</a>
        </div>
    </div>

    <div class="flex">
        {{-- Toggle Theme Dropdown --}}
        <x-dropdown width="28" class="pt-1">
            {{-- Toggle Theme Trigger --}}
            <x-slot name="trigger">
                <div x-data="{theme: 'system'}" x-init="theme = $store.theme.currentTheme" @select-theme.window="theme = $event.detail.theme; $store.theme.updateTheme(theme)">
                    <svg x-show="theme == 'light'" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <svg x-show="theme == 'dark'" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                        </path>
                    </svg>
                    <svg x-show="theme == 'system'" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                        </path>
                    </svg>
                </div>
            </x-slot>

            {{-- Theme Menu --}}
            <x-slot name="content">
                <div x-data="{selectTheme: (theme) => $dispatch('select-theme', {theme})}">
                    <x-dropdown-button x-on:click="selectTheme('light')">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <span>{{ __('Light') }}</span>
                </x-dropdown-button>
                <x-dropdown-button x-on:click="selectTheme('dark')">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                        </path>
                    </svg>
                    <span>{{ __('Dark') }}</span>
                </x-dropdown-button>
                <x-dropdown-button x-on:click="selectTheme('system')">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                        </path>
                    </svg>
                    <span>{{ __('System') }}</span>
                </x-dropdown-button>
                </div>
            </x-slot>
        </x-dropdown>

        @auth
            <x-dropdown width="36" class="ml-4 pt-1">
                <x-slot name="trigger">
                    <img class="h-6 w-6 rounded-full" src="{{ Auth::user()->profileFlag() }}" alt="{{ Auth::user()->name }}" />
                </x-slot>
                <x-slot name="content">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        @else
            <x-dropdown width="28" class="ml-4 pt-1">
                <x-slot name="trigger">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="{{ route('register') }}" active="{{ request()->routeIs('register') }}">
                        {{ __('Register') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="{{ route('login') }}" active="{{ request()->routeIs('login') }}">
                        {{ __('Login') }}
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        @endauth
    </div>
</div>

{{-- Mobile Menu --}}
<div x-data="{ open: false }" x-on:toggle-menu.window="open = !open" x-show="open" class="space-y-1 border-t pb-3 pt-2 dark:border-slate-500">
    <a href="{{ route('home') }}"
        class="py-2{{ request()->routeIs('home') ? ' bg-sky-500 text-white' : ' text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }} block rounded-md px-3">
        {{ __('Home') }}
    </a>
    <a href="{{ route('posts.index') }}"
        class="py-2{{ request()->routeIs('posts.*') ? ' bg-sky-500 text-white' : ' text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }} block rounded-md px-3">
        {{ __('Blog') }}
    </a>
    <a href="{{ route('about') }}"
        class="py-2{{ request()->routeIs('about') ? ' bg-sky-500 text-white' : ' text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }} block rounded-md px-3">
        {{ __('About') }}
    </a>
    <a href="{{ route('contact') }}"
        class="py-2{{ request()->routeIs('contact') ? ' bg-sky-500 text-white' : ' text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white' }} block rounded-md px-3">
        {{ __('Contact') }}
    </a>
</div>
