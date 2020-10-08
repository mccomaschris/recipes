@extends('layouts.main')

@section('content')
    <div class="flex flex-wrap lg:-mx-6">
        <div class="w-full lg:w-1/2 lg:px-6">
            <livewire:search-recipes />
        </div>
        <div class="w-full lg:w-1/2 lg:px-6 mt-12 lg:mt-0">
            @if(Auth::check())
                <div class="font-semibold text-lg">Create New Recipe</div>
                <form method="POST" action="/recipe">
                    @csrf
                    <div class="my-6">
                        <label for="title" class="hidden">Title</label>
                        <input type="text" name="title" id="title" placeholder="Recipe Title" class="form-input w-full"  required />
                        @error('title')
                            <div class="text-sm mt-2 text-red-500 font-semibold">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-6">
                        <label for="description" class="block">
                            <textarea class="form-textarea block w-full" name="description" id="description"  rows="3" placeholder="Recipe description."></textarea>
                        </label>
                    </div>
                    <div class="my-6">
                        <label for="notes" class="block">
                            <textarea class="form-textarea block w-full" name="notes" id="notes"  rows="3" placeholder="Recipe notes."></textarea>
                        </label>
                    </div>
                    <div class="my-6">
                        <label for="favorite" class="inline-flex items-center">
                            <input type="radio" class="form-radio text-green-500" name="favorite" id="favorite">
                            <span class="ml-2">Favorite</span>
                        </label>
                    </div>
                    <div class="my-6">
                        <input type="submit" value="Save Recipe" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    </div>
                </form>
            @endif
        </div>

    </div>
@endsection