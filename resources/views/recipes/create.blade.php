@extends('layouts.main')


@section('content')
    <div class="font-semibold text-lg">Create Recipe</div>
    <form method="POST" action="/recipe">
        @csrf
        <div class="my-6">
            <label for="title" class="hidden">Title</label>
            <input type="text" name="title" id="title" placeholder="Recipe Title" class="form-input w-full" required autofocus />
            @error('title')
                <div class="text-sm mt-2 text-red-500 font-semibold">{{ $message }}</div>
            @enderror
        </div>

        <div class="my-6">
            <label for="description" class="block">
                <textarea class="form-textarea block w-full" name="description" id="description" rows="3" placeholder="Recipe description."></textarea>
            </label>
        </div>

        <div class="my-6">
            <label for="notes" class="block">
                <textarea class="form-textarea block w-full" name="notes" id="notes" rows="3" placeholder="Recipe notes."></textarea>
            </label>
        </div>

        <div class="my-6">
            <label for="notes" class="block">
                <textarea class="form-textarea block w-full" name="secret_notes" id="secret_notes" rows="3" placeholder="This is a secret note, only viewable if logged in."></textarea>
            </label>
        </div>

        <div class="my-6">
            <input type="submit" value="Create Recipe" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>
@endsection