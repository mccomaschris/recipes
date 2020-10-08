<div>
    <div class="font-semibold text-lg">Find Recipes</div>
    <input wire:model="search" type="search" class="form-input mt-6 w-full" placeholder="Search Recipes" autofocus />
    @if(strlen($search) > 0)
        <ul class="border border-gray-300 rounded-md divide-y divide-gray-300 mt-4">
            @forelse ($recipes as $recipe)
                <li><a class="flex py-4 px-4 hover:bg-gray-100" href="/recipe/{{ $recipe->slug }}" class="text-green-500 hover:text-green-800 hover:underline"><span class="{{ $recipe->favorite ? 'font-semibold' : '' }}">{{ $recipe->title }}</span> @if($recipe->favorite) <span class="ml-2 uppercase rounded bg-green-400 text-white text-xs font-semibold px-3 py-1">Favorite</span> @endif</a></li>
            @empty
                <li class="flex py-4 px-4">No recipes found matching that search term</li>
            @endforelse
        </ul>
    @endif
</div>
