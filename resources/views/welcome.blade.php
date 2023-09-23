<x-app-layout :title="__('Home')" meta-description="Home meta description">
    <h1 class="mx-auto max-w-6xl font-serif text-2xl font-extrabold text-sky-600 sm:text-3xl sm:mb-8 sm:mt-4 md:text-4xl">
        {{ __('Latest posts') }}
    </h1>

    <div class="mx-auto mt-4 grid max-w-6xl gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <article class="flex flex-col overflow-hidden rounded bg-white shadow dark:bg-slate-900">
                <div class="h-52">
                    <a class="duration-300 hover:opacity-75" href="{{ route('posts.show', $post) }}">
                    <img
                        class="h-full w-full object-cover object-center"
                        src="{{ 'storage/'.$post->image }}"
                        alt="{{ $post->title }}"
                    />
                    </a>
                </div>
                <div class="flex-1 space-y-3 p-5">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-semibold text-sky-500">{{ $post->category->name }}</h3>
                        @if (! $post->isPublished)
                            <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-slate-400 text-white dark:bg-slate-500">{{ __('Draft') }}</span>
                        @endif
                    </div>
                    <h2 class="text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                    <a class="hover:underline" href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                    </h2>
                    <div class="hidden text-slate-500 dark:text-slate-400 md:block">
                        {!! $post->excerpt !!}
                    </div>
                </div>

                <div class="flex items-center justify-between p-5">
                    {{-- Author and Published Date --}}
                    <div class="flex space-x-2">
                        <img
                            class="h-10 w-10 rounded-full"
                            src="{{ $post->author->profileFlag() }}"
                            alt="{{ $post->author->name }}"
                        />
                        <div class="flex flex-col justify-center">
                            <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400">{{ $post->author->name }}</span>
                            <span class="text-sm text-slate-500">{{ ucfirst($post->published_at->isoFormat('MMM DD, YYYY')) }}</span>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-app-layout>
