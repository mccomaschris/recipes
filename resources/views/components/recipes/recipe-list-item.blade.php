<div class="snap-center shrink-0 lg:w-1/3 lg:px-4">
    <a href="{{ route('recipe.show', $recipe->slug) }}">
        <div class="h-full border border-stone-200 rounded flex flex-col w-72 lg:w-auto">
            <div class="bg-stone-700 h-48"></div>
            <div class="flex flex-col px-6 py-6">
                <div class="font-semibold text-xl">{{ $recipe->title }}</div>
                <div class="my-2 flex-1">
                    {!! $recipe->description !!}
                </div>
            </div>
        </div>
    </a>
</div>
