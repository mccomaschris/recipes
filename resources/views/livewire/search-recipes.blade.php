<div class="flex flex-wrap lg:-mx-6">
    <div class="w-full lg:w-1/2 lg:px-6">
        <div class="font-semibold text-lg">Find Recipes</div>

        <input wire:model="search" type="search" class="form-input mt-6 w-full" placeholder="Search Recipes" autofocus />

        <ul class="border border-gray-300 rounded-md divide-y divide-gray-300 mt-4">
            @forelse ($recipes as $recipe)
                <li><a class="flex py-4 px-4 hover:bg-gray-100" href="/recipe/{{ $recipe->slug }}" class="text-green-500 hover:text-green-800 hover:underline">{{ $recipe->title }}</a></li>
            @empty
                <li class="flex py-4 px-4">No recipes found matching that search term</li>
            @endforelse
        </ul>
    </div>

    <div>
        <div class="font-semibold text-lg">Filter by Type</div>
        <div class="flex flex-wrap space-x-1 mt-6">
            @foreach($tags as $item)
                @if ($tag == $item->id)
                    <x-tags.active id="{{ $item->id }}" wire:click.prevent="getTag('{{ $item->name }}')">{{ $item->name }}</x-tag>
                @else
                    <x-tags.inactive id="{{ $item->id }}" wire:click.prevent="getTag('{{ $item->name }}')">{{ $item->name }}</x-tag>
                @endif
            @endforeach
        </div>
    </div>
</div>
