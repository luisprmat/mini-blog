<x-app-layout :title="$post->title" :meta-description="$post->body">
    <article class="mx-auto flex max-w-4xl flex-col">
        <div class="h-52 md:h-72 lg:h-96">
            <img
                class="h-full w-full rounded object-cover object-center"
                src="{{ $post->imageUrl() }}"
                alt="{{ $post->title }}"
            />
        </div>
        <div class="flex-1 space-y-3 pt-4 md:text-center">
            <h3 class="text-sm font-semibold text-sky-500 dark:text-sky-400">
                Laravel
            </h3>
            <h2 class="text-2xl font-semibold leading-tight text-slate-800 dark:text-slate-200 md:text-4xl">
                {{ $post->title }}
            </h2>
        </div>
        <div class="flex space-x-2 pt-4 md:mx-auto">
            <img
                class="h-10 w-10 rounded-full"
                src="https://ui-avatars.com/api?name=Luis%20Parrado"
                alt="Luis Parrado"
            />
            <div class="flex flex-col justify-center">
                <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400">Luis Parrado</span>
                <span class="text-sm text-slate-500 dark:text-slate-400">Ene 08, 2023</span>
            </div>
        </div>
        <div class="prose prose-slate mx-auto mt-6 dark:prose-invert lg:prose-xl">
            {!! $post->body !!}
        </div>
    </article>

    <div class="mx-auto max-w-6xl mt-10">
        <x-link href="{{ route('posts.index') }}">{{ __('Go back') }}</x-link>
    </div>
</x-app-layout>
