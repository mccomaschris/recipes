<div class="w-full flex gap-x-8 lg:grid lg:grid-cols-3 lg:gap-6 snap-x snap-mandatory overflow-x-auto">
    @forelse ($recipes as $recipe)
        <x-recipes.recipe-list-item :recipe=$recipe/>
    @empty
        <p class="lg:px-4">No recipes found.</p>
    @endforelse
</div>
