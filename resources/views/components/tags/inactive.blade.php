<x-tag {{ $attributes->merge([
    'class' => 'bg-gray-200 text-gray-700 hover:bg-gray-300 hover:text-gray-700',
]) }}
>
    {{ $slot }}
</x-tag>