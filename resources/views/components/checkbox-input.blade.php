@props([
    'disabled' => false,
    'label' => '',
])

<label {{ $attributes->merge(['class' => 'flex items-center' ]) }}>
    <input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded border border-slate-300 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300 focus:ring-opacity-50 dark:border-slate-700 dark:bg-slate-900 dark:focus:ring-slate-800']) !!}>
    @if ($label !== '')
        <span class="ml-2 cursor-pointer text-slate-500 dark:text-slate-300">
            {{ $label }}
        </span>
    @endif
</label>
