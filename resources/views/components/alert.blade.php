<div x-data="{ shown: true }"
    x-show="shown"
    x-init="setTimeout(() => shown = false, 3000)"
    x-transition:enter-start="-translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-full opacity-0"
    class="mx-auto max-w-6xl bg-emerald-500 px-3 py-2 font-bold text-white dark:bg-emerald-700 sm:px-6 lg:px-8 duration-300 ease"
>{{ $slot }}</div>
