<x-app-layout :title="__('New post')" :meta-description="__('Create new post')">
    <div class="mx-auto mt-4 max-w-2xl">
        <div class="mx-auto max-w-4xl rounded-lg bg-white p-10 shadow-lg dark:bg-slate-900 md:p-14">
            <h1 class="text-center font-serif text-3xl font-extrabold text-sky-600 dark:text-sky-400">
                {{ __('Create new post') }}
            </h1>
            <form class="mt-10 space-y-4" action="{{ route('posts.store') }}" method="POST">
                @include('posts.form-fields')

                <x-primary-button class="w-full">
                    {{ __('Send') }}
                </x-primary-button>
            </form>
            <div class="mt-4 flex items-center justify-between">
                <a class="text-slate-600 underline dark:text-slate-200" href="{{ route('posts.index') }}">
                    {{ __('Go back') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
