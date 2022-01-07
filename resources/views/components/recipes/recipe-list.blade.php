<div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-8">
    @forelse ($recipes as $recipe)
        <x-recipes.recipe-list-item :recipe=$recipe/>
    @empty
        <p class="lg:px-4">No recipes found.</p>
    @endforelse
</div>
