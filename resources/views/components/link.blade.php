@props([
    'href' => '#'
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'font-medium underline text-sky-500 dark:text-sky-700']) }}>{{ $slot }}</a>
