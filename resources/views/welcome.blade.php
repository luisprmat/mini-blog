<x-app-layout
    title="Home"
    meta-description="Home meta description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>
    @auth
        <div class="px-2 sm:px-16 lg:px-20 max-w-7xl mx-auto text-slate-600 dark:text-white">
            <span class="font-semibold">Authenticated User:</span> {{ Auth::user()->name }}
        </div>
    @endauth
</x-app-layout>
