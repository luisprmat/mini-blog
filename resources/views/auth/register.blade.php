<x-app-layout :title="__('Register')" meta-description="Register users">
    <div class="mx-auto mt-4 max-w-xl">
        <div class="mx-auto max-w-4xl rounded-lg bg-white p-10 shadow-lg dark:bg-slate-900 md:p-14">
            <h1 class="text-center font-serif text-3xl font-extrabold text-sky-600 dark:text-sky-400">
                {{ __('Register') }}
            </h1>
            <form class="mt-10 space-y-4" action="{{ route('register') }}" method="POST">
                @csrf

                <label class="flex flex-col">
                    <x-text-input name="name" type="text" :placeholder="__('Name').'...'" :value="old('name')" autofocus required autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </label>

                <label class="flex flex-col">
                    <x-text-input name="email" type="email" :placeholder="__('E-mail').'...'" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </label>

                <label class="flex flex-col">
                    <x-text-input name="password" type="password" :placeholder="__('Password').'...'" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </label>

                <label class="flex flex-col">
                    <x-text-input name="password_confirmation" type="password" :placeholder="__('Password Confirmation').'...'" required autocomplete="new-password" />
                </label>

                <x-primary-button class="w-full">
                    {{ __('Register') }}
                </x-primary-button>
            </form>
            <div class="mt-4 flex items-center justify-between">
                <a class="text-slate-600 underline dark:text-slate-200" href="{{ route('login') }}">
                    {{ __('I already have an account.') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
