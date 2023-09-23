@props([
    'disabled' => false
])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200']) !!}>{{ $slot }}</select>
