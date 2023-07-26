<x-app-layout :title="__('Contact')" meta-description="Contact meta description">
    <div class="mx-auto mt-4 max-w-xl">
        <div class="mx-auto max-w-4xl rounded-lg bg-white p-10 shadow-lg dark:bg-slate-900 md:p-14">
            <h1 class="text-center font-serif text-3xl font-extrabold text-sky-600 dark:text-sky-400">
                {{ __('Contact') }}
            </h1>
            <form class="mt-10 flex flex-col space-y-4">
                <input type="text"
                    class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
                    placeholder="{{ __('Name') }}..." autofocus />
                <input type="text"
                    class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
                    placeholder="{{ __('E-mail') }}..." />
                <input type="text"
                    class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
                    placeholder="{{ __('Subject') }}..." />
                <textarea
                    class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
                    placeholder="{{ __('Message') }}..."></textarea>
                <button
                    class="rounded-md bg-sky-500 py-2 text-lg font-bold text-white shadow-md duration-300 hover:bg-sky-600 active:bg-sky-400"
                    type="submit">
                    {{ __('Send') }}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
