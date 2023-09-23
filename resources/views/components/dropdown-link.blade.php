@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'flex w-full items-center space-x-2 px-4 py-2 text-sm text-sky-500 hover:bg-slate-100 focus:bg-slate-100 dark:text-sky-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900'
        : 'flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-900 dark:focus:bg-slate-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
