<span x-data="
    {
        isEditing: false,
        focus: function() {
            const textInput = this.$refs.textInput;
            textInput.focus();
            textInput.select();
        }
    }
    "
    x-cloak
>
    <li>
        <span x-on:click="isEditing = true; $nextTick(() => focus())">
            {{ $ingredient->amount }} {{ $ingredient->measurement }} {{ $ingredient->ingredient }}
        </span>
        <span x-show="isEditing" class="flex my-4" x-cloak>
            <form wire:submit.prevent="save" class="flex justify-between flex-wrap w-full" x-on:submit="isEditing = false" x-on:click.away="isEditing = false">
                <input x-cloak wire:model="newAmount" x-ref="textInput"  type="text" class="form-input w-full lg:w-auto" placeholder="1/2, 1, etc" required />
                <select x-cloak wire:model="newMeasurement" class="mt-4 lg:mt-0 lg:ml-4 form-select w-full lg:w-auto">
                    <option value=""></option>
                    <option value="tsp">tsp</option>
                    <option value="tbsp">tbsp</option>
                    <option value="floz">fluid oz</option>
                    <option value="gill">gill</option>
                    <option value="cup">cup</option>
                    <option value="pt">pint</option>
                    <option value="qt">quart</option>
                    <option value="gal">gallon</option>
                    <option value="milliliter">milliliter</option>
                    <option value="liter">liter</option>
                    <option value="deciliter">deciliter</option>
                    <option value="lbs">lbs</option>
                    <option value="oz">oz</option>
                    <option value="milligram">milligram</option>
                    <option value="gram">gram</option>
                    <option value="kilogram">kilogram</option>
                    <option value="cloves">cloves</option>
                </select>
                <input x-cloak wire:model="newIngredient" type="text" class="mt-4 lg:mt-0 lg:ml-4 form-input lg:flex-1 w-full lg:w-auto" placeholder="Add ingredient" required />
                <input x-cloak type="submit" value="Save" class="mt-4 lg:mt-0 lg:ml-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            </form>
        </span>
    </li>
</span>
