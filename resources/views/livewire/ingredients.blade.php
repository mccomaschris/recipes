<div x-cloak>
    <h2 class="mb-2 font-semibold">Ingredients</h2>

    <ul class="list-disc list-inside">
        @forelse ($recipe->ingredients as $ingredient)
            @if(Auth::check())
                <livewire:edit-ingredient :ingredient="$ingredient" :key="$ingredient->id" />
            @else
                <li>{{ $ingredient->amount }} {{ str_plural($ingredient->measurement, $ingredient->amount) }} {{ $ingredient->ingredient }}</li>
            @endif
        @empty
            <p>There are no ingredients for this recipe</p>
        @endforelse
    </ul>

    @if(Auth::check())
        <div class="bg-gray-100 px-3 py-2 my-3 rounded">
            <div class="font-semibold mb-2">Add Ingredient</div>
            <form wire:submit.prevent="submit" class="flex justify-between flex-wrap">
                <input wire:model="amount" type="text" class="form-input w-full lg:w-auto" placeholder="1/2, 1, etc" required />
                <select wire:model="measurement" class="mt-4 lg:mt-0 lg:ml-4 form-select w-full lg:w-auto">
                    <option value=""></option>
                    <option value="tsp">tsp</option>
                    <option value="tbsp">tbsp</option>
                    <option value="lb">lb</option>
                    <option value="cup">cup</option>
                    <option value="oz">oz</option>
                    <option value="floz">fluid oz</option>
                    <option value="gill">gill</option>
                    <option value="pt">pint</option>
                    <option value="qt">quart</option>
                    <option value="gal">gallon</option>
                    <option value="milliliter">milliliter</option>
                    <option value="liter">liter</option>
                    <option value="deciliter">deciliter</option>
                    <option value="milligram">milligram</option>
                    <option value="gram">gram</option>
                    <option value="kilogram">kilogram</option>
                    <option value="cloves">cloves</option>
                </select>
                <input wire:model="ingredient" type="text" class="mt-4 lg:mt-0 lg:ml-4 form-input lg:flex-1 w-full lg:w-auto" placeholder="Add ingredient" required />
                <input type="submit" value="Add" class="mt-4 lg:mt-0 lg:ml-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            </form>
        </div>
    @endif

    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2500); " x-show="show" class="bg-green-100 text-green-600 border border-green-600 rounded my-4 px-4 py-2">
            {{ session('message') }}
        </div>
    @endif
</div>
