<x-tag {{ $attributes->merge([
    'class' => 'bg-green-500 text-white hover:bg-green-600 hover:text-white',
]) }}
>
    {{ $slot }}
</x-tag>