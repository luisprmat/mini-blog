<x-app-layout :title="__('Login')" meta-description="Login users">
    <h1 class="my-4 text-center font-serif text-3xl text-sky-600 dark:text-sky-500">{{ __('Login') }}</h1>

    <form class="mx-auto max-w-xl rounded bg-white px-8 py-4 shadow dark:bg-slate-800" action="{{ route('login') }}"
        method="POST">
        @csrf

        <div class="space-y-4">
            <label class="flex flex-col">
                <span class="font-serif text-slate-600 dark:text-slate-400">
                    {{ __('Email') }}
                </span>
                <input
                    class="rounded-md border-slate-300 text-slate-600 shadow-sm focus:border-slate-300 focus:ring focus:ring-slate-300 focus:ring-opacity-50 dark:border-slate-900 dark:bg-slate-800 dark:bg-slate-900/80 dark:text-slate-100 dark:placeholder:text-slate-400 dark:focus:border-slate-700 dark:focus:ring-slate-800"
                    autofocus name="email" type="email" value="{{ old('email') }}">
                @error('email')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror
            </label>
            <label class="flex flex-col">
                <span class="font-serif text-slate-600 dark:text-slate-400">
                    {{ __('Password') }}
                </span>
                <input
                    class="rounded-md border-slate-300 text-slate-600 shadow-sm focus:border-slate-300 focus:ring focus:ring-slate-300 focus:ring-opacity-50 dark:border-slate-900 dark:bg-slate-800 dark:bg-slate-900/80 dark:text-slate-100 dark:placeholder:text-slate-400 dark:focus:border-slate-700 dark:focus:ring-slate-800"
                    name="password" type="password">
                @error('password')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror
            </label>
            <label class="flex items-center">
                <input
                    class="rounded border border-slate-300 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300 focus:ring-opacity-50 dark:border-slate-700 dark:bg-slate-900 dark:focus:ring-slate-800"
                    name="remember" type="checkbox">
                <span class="ml-2 cursor-pointer font-serif text-slate-600 dark:text-slate-400">
                    {{ __('Remember me') }}
                </span>
            </label>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a class="rounded border-2 border-transparent text-sm font-semibold text-slate-600 underline focus:border-slate-500 focus:outline-none dark:text-slate-300"
                href="{{ route('register') }}">{{ __('Register') }}</a>

            <button
                class="inline-flex items-center rounded-md border-2 border-transparent bg-sky-800 px-4 py-2 text-center text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-sky-700 focus:border-sky-500 focus:outline-none active:bg-sky-700 dark:text-sky-200"
                type="submit">{{ __('Login') }}</button>
        </div>
    </form>
</x-app-layout>
