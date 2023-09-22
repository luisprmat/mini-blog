@props(['type' => 'success'])

@php
    $classes = match ($type) {
        'success' => 'mx-auto max-w-6xl bg-emerald-500 px-3 py-2 font-bold text-white dark:bg-emerald-700 sm:px-6 lg:px-8 duration-300 ease',
        'error' => 'mx-auto max-w-6xl bg-red-500 px-3 py-2 font-bold text-white dark:bg-red-700 sm:px-6 lg:px-8 duration-300 ease',
    };
@endphp

<div x-data="{ shown: true }"
    x-show="shown"
    x-init="setTimeout(() => shown = false, 1500)"
    x-transition:enter-start="-translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-full opacity-0"
    class="{{ $classes }}"
>{{ $slot }}</div>
