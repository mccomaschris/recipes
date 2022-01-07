<div class="w-full">
    <div class="h-full border border-stone-200 rounded flex flex-col bg-stone-50">
        @if ($recipe->image_url)
            <div class="h-48 bg-cover bg-center" style="background: url({{ $recipe->image_url }})"></div>
        @else
            <div class="bg-stone-700 h-48 flex items-center justify-center font-semibold text-stone-200">No image available.</div>
        @endif
        <div class="flex flex-col px-6 py-6">
            <a href="{{ route('recipe.show', $recipe->slug) }}" class="text-xl transition-all duration-100 ease-out">{{ $recipe->title }}</a>
            <div class="my-2 flex-1">
                {!! $recipe->description !!}
            </div>
        </div>
    </div>
</div>
