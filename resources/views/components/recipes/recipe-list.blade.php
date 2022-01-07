<div class="w-full flex lg:flex-wrap gap-x-8 lg:gap-x-0 lg:gap-y-8 lg:-mx-4 snap-x snap-mandatory overflow-x-auto">
    @forelse ($recipes as $recipe)
        <x-recipes.recipe-list-item :recipe=$recipe/>
    @empty
        <p class="lg:px-4">No recipes found.</p>
    @endforelse
</div>
