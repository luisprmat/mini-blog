<nav class="w-screen border-b border-slate-900/10 bg-white dark:border-slate-300/10 dark:bg-slate-900 lg:mx-0 lg:px-8">
    {{-- class="w-screen overflow-scroll bg-white border-b dark:bg-slate-900 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0"> --}}
    <div class="mx-auto max-w-7xl px-4 sm:px-16 lg:px-20">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{ route('home') }}">
                        <svg class="h-8 w-8 text-sky-500" fill="none" width="0" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="mx-auto">
                    <div class="flex space-x-4">
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }} rounded-md px-3 py-2 text-sm font-medium hover:text-sky-600 dark:hover:text-white">
                            {{ __('Home') }}
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('posts.index') }}"
                            class="{{ request()->routeIs('posts.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }} rounded-md px-3 py-2 text-sm font-medium hover:text-sky-600 dark:hover:text-white">
                            {{ __('Blog') }}
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }} rounded-md px-3 py-2 text-sm font-medium hover:text-sky-600 dark:hover:text-white">
                            {{ __('About') }}
                        </a>
                        <!-- Active: 'text-sky-600 dark:text-white', Inactive 'text-slate-400' -->
                        <a href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }} rounded-md px-3 py-2 text-sm font-medium hover:text-sky-600 dark:hover:text-white">
                            {{ __('Contact') }}
                        </a>
                    </div>
                </div>
                <div class="ml-auto">
                    <div class="flex space-x-4">
                        @guest
                            <a href="{{ route('register') }}"
                                class="{{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }} rounded-md py-2 text-sm font-medium hover:text-sky-600 dark:hover:text-white lg:px-3">
                                {{ __('Register') }}
                            </a>

                            <a href="{{ route('login') }}"
                                class="{{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }} rounded-md py-2 text-sm font-medium hover:text-sky-600 dark:hover:text-white lg:px-3">
                                {{ __('Login') }}
                            </a>
                        @endguest
                        @auth
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="#"
                                    class="rounded-md py-2 text-sm font-medium text-slate-400 hover:text-sky-600 dark:hover:text-white lg:px-3"
                                    onclick="this.closest('form').submit()">{{ __('Logout') }}</a>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
