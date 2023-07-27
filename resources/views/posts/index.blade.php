<x-app-layout :title="__('Blog')" meta-description="Blog meta description">
    <div @class(['relative' => Auth::check(),'mx-auto max-w-6xl'])>
        <h1 class="mx-auto mb-8 mt-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            {{ __('Blog') }}
        </h1>
        @auth
            <a href="{{ route('posts.create') }}" class="absolute right-0 top-0 flex h-10 w-10 items-center justify-center rounded-full border border-sky-600 text-sky-600 transition-all hover:border-2 hover:bg-sky-100 hover:shadow-md active:border-2 active:border-sky-400 dark:border-sky-400 dark:text-sky-400 dark:hover:bg-sky-950 md:top-1 md:hidden">
            <svg
                class="h-6 w-6"
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
                    d="M12 4.5v15m7.5-7.5h-15"
                ></path>
            </svg>
            </a>
            <div class="absolute right-0 top-0">
                <a href="{{ route('posts.create') }}" class="hidden h-10 items-center justify-center rounded-l-full border border-sky-600 text-sky-600 transition-all hover:border-2 hover:bg-sky-100 hover:shadow-md active:border-2 active:border-sky-400 dark:border-sky-400 dark:text-sky-400 dark:hover:bg-sky-950 md:top-1 md:flex">
                    <svg
                        class="ml-1 h-6 w-6"
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
                        d="M12 4.5v15m7.5-7.5h-15"
                    ></path>
                    </svg>
                    <span class="m-2 font-medium">{{ __('Create new post') }}</span>
                </a>
            </div>
        @endauth
    </div>
    <div class="mx-auto mt-4 grid max-w-6xl gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <article @class(['group' => Auth::check(), 'flex flex-col overflow-hidden rounded bg-white shadow dark:bg-slate-900'])>
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

                <div class="flex items-center justify-between p-5">
                    {{-- Author and Published Date --}}
                    <div class="flex space-x-2">
                        <img
                            class="h-10 w-10 rounded-full"
                            src="https://ui-avatars.com/api?name=Luis%20Parrado"
                            alt="Luis Parrado"
                        />
                        <div class="flex flex-col justify-center">
                            <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400">Luis Parrado</span>
                            <span class="text-sm text-slate-500">Ene 08, 2023</span>
                        </div>
                    </div>

                    @auth
                        {{-- Actions Buttons --}}
                        <div class="hidden group-hover:block group-active:block">
                            <div class="flex space-x-2">
                                {{-- Edit button --}}
                                <a href="{{ route('posts.edit', $post) }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-sky-600 text-sky-600 transition-all hover:-translate-y-0.5 hover:border-2 hover:bg-sky-100 hover:shadow-md active:border-2 active:border-sky-400 dark:border-sky-400 dark:text-sky-400 dark:hover:bg-sky-950">
                                    <svg
                                        class="h-6 w-6"
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
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        ></path>
                                    </svg>
                                </a>

                                {{-- Delete button --}}
                                <a href="{{ route('posts.destroy', $post) }}"
                                    onclick="event.preventDefault();
                                        if(!window.confirm('{{ __('Are you sure to delete this post? This action can not be undone.') }}')) return;
                                        document.getElementById('post-{{ $post->id }}').submit();"
                                    class="dark:text-red-40 flex h-10 w-10 items-center justify-center rounded-full border border-red-700 text-red-700 transition-all hover:-translate-y-0.5 hover:border-2 hover:bg-red-100 hover:shadow-md active:border-2 active:border-red-400 dark:border-red-400 dark:hover:bg-red-950">
                                    <svg
                                        class="h-6 w-6"
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
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        ></path>
                                    </svg>
                                </a>
                                <form id="post-{{ $post->id }}" action="{{ route('posts.destroy', $post) }}" method="POST" class="hidden">@csrf @method('DELETE')</form>
                            </div>
                        </div>
                    @endauth
                </div>
            </article>
        @endforeach
    </div>
</x-app-layout>
