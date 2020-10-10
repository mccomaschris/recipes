@extends('layouts.main')


@section('content')
    <div class="font-semibold text-lg">Edit {{ $recipe->title }} Recipe</div>
    <form method="POST" action="/recipe/{{ $recipe->slug }}">
        @method('PUT')
        @csrf
        <div class="my-6">
            <label for="title" class="hidden">Title</label>
            <input type="text" name="title" id="title" placeholder="Recipe Title" class="form-input w-full" value="{{ $recipe->title }}" required />
            @error('title')
                <div class="text-sm mt-2 text-red-500 font-semibold">{{ $message }}</div>
            @enderror
        </div>

        <livewire:recipe-tags :recipe="$recipe" />

        <div class="my-6">
            <label for="description" class="block">
                <textarea class="form-textarea block w-full" name="description" id="description"  rows="3" placeholder="Recipe description.">{{ $recipe->description }}</textarea>
            </label>
        </div>
        <div class="my-6">
            <label for="notes" class="block">
                <textarea class="form-textarea block w-full" name="notes" id="notes"  rows="3" placeholder="Recipe notes.">{{ $recipe->notes }}</textarea>
            </label>
        </div>
        <div class="my-6">
            <label for="notes" class="block">
                <textarea class="form-textarea block w-full" name="secret_notes" id="secret_notes"  rows="3" placeholder="This is a secret note, only viewable if logged in.">{{ $recipe->secret_notes }}</textarea>
            </label>
        </div>
        <div class="my-6">
            <label for="favorite" class="inline-flex items-center">
                <input type="radio" class="form-radio text-green-500" name="favorite" id="favorite" {{ $recipe->favorite == 1 ? 'checked' : '' }}>
                <span class="ml-2">Favorite</span>
            </label>
        </div>

        <div class="my-6">
            <input type="submit" value="Save Recipe" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>
@endsection