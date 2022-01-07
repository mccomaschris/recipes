<x-tag {{ $attributes->merge([
    'class' => 'transition-colors duration-100 ease-out bg-green-700 text-white hover:text-white hover:bg-stone-900',
]) }}
>
    {{ $slot }}
</x-tag>
