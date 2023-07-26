<x-app-layout :title="__('Blog')" meta-description="Blog meta description">
    {{-- <header class="space-y-2 px-6 py-4 text-center">
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
    </main> --}}
    <h1 class="mb-8 mt-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
        {{ __('Blog') }}
    </h1>
    <div class="mx-auto mt-4 grid max-w-6xl gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <article class="flex flex-col overflow-hidden rounded bg-white shadow dark:bg-slate-900">
                <div class="h-52">
                    <a class="duration-300 hover:opacity-75" href="{{ route('posts.show', $post) }}">
                    <img
                        class="h-full w-full object-cover object-center"
                        src="{{ $post->imageUrl() }}"
                        alt="{{ $post->title }}"
                    />
                    </a>
                </div>
                <div class="flex-1 space-y-3 p-5">
                    <h3 class="text-sm font-semibold text-sky-500">Laravel</h3>
                    <h2 class="text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                    <a class="hover:underline" href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                    </h2>
                    <p class="hidden text-slate-500 dark:text-slate-400 md:block">
                        {!! $post->excerpt !!}
                    </p>
                </div>
                <div class="flex space-x-2 p-5">
                    <img
                    class="h-10 w-10 rounded-full"
                    src="https://ui-avatars.com/api?name=Luis%20Parrado"
                    alt="Luis Parrado"
                    />
                    <div class="flex flex-col justify-center">
                    <span
                        class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400"
                        >Luis Parrado</span
                    >
                    <span class="text-sm text-slate-500">Ene 08, 2023</span>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-app-layout>
