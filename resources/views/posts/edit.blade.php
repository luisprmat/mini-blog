<x-app-layout :title="$post->title" :meta-description="__('Edit form')">
    <h1 class="my-4 text-center font-serif text-3xl text-sky-600 dark:text-sky-500">{{ __('Edit form') }}</h1>

    <form class="mx-auto max-w-xl rounded bg-white px-8 py-4 shadow dark:bg-slate-800"
        action="{{ route('posts.update', $post) }}" method="POST">
        @method('PATCH')
        @include('posts.form-fields')
        <div class="mt-4 flex items-center justify-between">
            <a class="rounded border-2 border-transparent text-sm font-semibold text-slate-600 underline focus:border-slate-500 focus:outline-none dark:text-slate-300"
                href="{{ route('posts.index') }}">{{ __('Go back') }}</a>

            <button
                class="inline-flex items-center rounded-md border-2 border-transparent bg-sky-800 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-sky-700 focus:border-sky-500 focus:outline-none active:bg-sky-700 dark:text-sky-200"
                type="submit">{{ __('Send') }}</button>
        </div>
    </form>
</x-app-layout>
