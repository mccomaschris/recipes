<x-tag {{ $attributes->merge([
    'class' => 'bg-green-400 text-white text-stone-900 hover:text-white hover:bg-stone-900',
]) }}
>
    {{ $slot }}
</x-tag>
