@extends('layouts.main')

@section('content')
    <div class="lg:sticky lg:top-0 bg-stone-100 lg:pt-4 lg:pb-8 lg:border-b border-stone-200">
        <div class="flex items-center justify-center lg:justify-between">
            <h1 class="leading-none mb-0">Recipes</h1>
            <div class="hidden lg:block">
                <label for="nav" class="hidden">Navigation</label>
                <select onchange="document.getElementById(this.value).scrollIntoView();" id="nav" name="nav" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-stone-200 focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm rounded-md">
                    <option value="recent">Recently Added</option>
                    <option value="favorites">Favorites</option>
                    <option value="random">Random</option>
                </select>
            </div>
        </div>
    </div>

    <h2>Categories</h2>
    <div class="flex flex-wrap gap-x-2 gap-y-1">
        @foreach($tags as $tag)
            @if($tag->recipe_count > 0)
                <div class="">
                    <x-tags.active href="{{ route('tag.show', $tag->slug) }}">{{ $tag->name }} ({{ $tag->recipe_count }})</x-tag>
                </div>
            @endif
        @endforeach
    </div>

    <h2 class="scroll-mt-24" id="recent">Recently Added Recipes</h2>
    <x-recipes.recipe-list :recipes=$recents />

    <h2 class="scroll-mt-24" id="favorites">Favorite Recipes</h2>
    <x-recipes.recipe-list :recipes=$favorites />

    <h2 class="scroll-mt-24" id="random">Random Recipes</h2>
    <x-recipes.recipe-list :recipes=$randoms />
@endsection
