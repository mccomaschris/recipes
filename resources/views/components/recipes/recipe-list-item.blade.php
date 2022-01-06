<div class="snap-center shrink-0 lg:w-1/3 lg:px-4">
    <div class="h-full border border-stone-200 rounded flex flex-col w-72 lg:w-auto">
        @if ($recipe->image_url)
            <div class="h-48 bg-cover bg-center" style="background: url({{ $recipe->image_url }})"></div>
        @else
            <div class="bg-stone-700 h-48 flex items-center justify-center font-semibold text-stone-200">No image available.</div>
        @endif
        <div class="flex flex-col px-6 py-6">
            <a href="{{ route('recipe.show', $recipe->slug) }}" class="text-xl">{{ $recipe->title }}</a>
            <div class="my-2 flex-1">
                {!! $recipe->description !!}
            </div>
        </div>
    </div>
</div>
