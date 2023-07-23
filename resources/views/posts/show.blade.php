<x-app-layout :title="$post->title" :meta-description="$post->body">
    <h1 class="my-4 text-center font-serif text-3xl text-sky-600 dark:text-sky-500">{{ $post->title }}</h1>

    <div class="mx-auto flex h-96 max-w-xl flex-col rounded bg-white px-8 py-4 shadow dark:bg-slate-800">
        <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400">{{ $post->body }}</p>

        <a class="mr-auto rounded border-2 border-transparent text-sm font-semibold text-slate-600 underline focus:border-slate-500 focus:outline-none dark:text-slate-300"
            href="{{ route('posts.index') }}">{{ __('Go back') }}</a>
    </div>
</x-app-layout>
