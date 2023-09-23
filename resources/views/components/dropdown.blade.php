@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'bg-white bg-white/90 shadow-lg dark:bg-slate-800/90 overflow-hidden'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '28':
        $width = 'w-28';
        break;

    case '36':
        $width = 'w-36';
        break;

    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div {{ $attributes->merge(['class' => 'relative']) }} x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <button {{ $trigger->attributes->merge(['class' => 'rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 focus:ring-offset-transparent dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700']) }} @click="open = ! open">
        {{ $trigger }}
    </button>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
