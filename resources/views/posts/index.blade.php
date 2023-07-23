<x-app-layout :title="__('Blog')" meta-description="Blog meta description">
    <header class="space-y-2 px-6 py-4 text-center">
        <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">{{ __('Blog') }}</h1>

        @auth
            <a class="focus:shadow-outline-sky inline-flex items-center rounded-md border border-transparent bg-sky-800 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-sky-700 focus:border-sky-900 focus:outline-none active:bg-sky-900 dark:text-sky-200"
                href="{{ route('posts.create') }}">{{ __('Create new post') }}</a>
        @endauth
    </header>
    <main class="mx-auto grid w-full max-w-7xl gap-4 px-4 sm:grid-cols-2 md:grid-cols-3">
        @foreach ($posts as $post)
            <div class="max-w-3xl space-y-4 rounded bg-white px-4 py-2 shadow dark:bg-slate-800">
                <h2 class="text-xl text-slate-600 hover:underline dark:text-slate-300">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h2>
                @auth
                    <div class="flex justify-between">
                        <a class="inline-flex items-center text-center text-xs font-semibold uppercase tracking-widest text-slate-500 transition duration-150 ease-in-out hover:text-slate-600 focus:border-slate-200 focus:outline-none dark:text-slate-400 dark:hover:text-slate-500"
                            href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="inline-flex items-center text-center text-xs font-semibold uppercase tracking-widest text-red-500 transition duration-150 ease-in-out hover:text-red-600 focus:outline-none dark:text-red-500/80"
                                type="submit">{{ __('Delete') }}</button>
                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
    </main>
</x-app-layout>
