{{-- @props(
    ['cssColors' => 'bg-gray-200 text-gray-700 hover:bg-gray-300 hover:text-gray-700']
) --}}

<a {{ $attributes->merge([
    'class' => 'no-underline py-1 px-3 rounded uppercase text-xs font-semibold tracking-wide inline-block cursor-pointer',
]) }}
>
    {{ $slot }}
</a>
