<div>
    <h2 class="mb-2 font-semibold">Instructions</h2>

    <ol class="list-decimal list-inside">
        @forelse ($recipe->instructions as $instruction)
            <li>{{ $instruction->instruction }}</li>
        @empty
            <p>There are no instructions for this recipe</p>
        @endforelse
    </ol>

    @if(Auth::check())
        <div class="bg-gray-100 px-3 py-2 my-3 rounded">
            <div class="font-semibold mb-2">Add instruction</div>
            <form wire:submit.prevent="submit">
                @csrf
                <label for="instruction" class="hidden">Instruction</label>
                <input wire:model="instruction" type="text" class="form-input w-full" placeholder="Add instruction" required />
            </form>
        </div>
    @endif

    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2500); " x-show="show" class="bg-green-100 text-green-600 border border-green-600 rounded my-4 px-4 py-2">
            {{ session('message') }}
        </div>
    @endif
</div>
