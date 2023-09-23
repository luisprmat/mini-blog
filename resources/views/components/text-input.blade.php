@props([
    'disabled' => false
])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200']) !!}>
