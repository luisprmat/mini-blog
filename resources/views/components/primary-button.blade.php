@props(['type' => 'submit'])

<button {{ $attributes->merge(['type' => $type, 'class' => 'rounded-md bg-sky-500 py-2 text-lg font-bold text-white shadow-md duration-300 hover:bg-sky-600 active:bg-sky-400']) }}>
    {{ $slot }}
</button>
