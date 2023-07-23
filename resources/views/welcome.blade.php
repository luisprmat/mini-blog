<x-app-layout :title="__('Home')" meta-description="Home meta description">
    <h1 class="my-4 text-center font-serif text-3xl text-sky-600 dark:text-sky-500">{{ __('Home') }}</h1>
    @auth
        <div class="mx-auto max-w-7xl px-2 text-slate-600 dark:text-white sm:px-16 lg:px-20">
            <span class="font-semibold">{{ __('Authenticated User') }}:</span> {{ Auth::user()->name }}
        </div>
    @endauth
</x-app-layout>
