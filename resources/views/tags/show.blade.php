@extends('layouts.main')

@section('nav')
    <x-spacer />
    <span class="font-semibold text-stone-700">{{ $tag->name }}</span>
@endsection

@section('content')
    <div class="lg:sticky lg:top-0 bg-stone-100 lg:pt-4 pb-8 lg:border-b border-stone-200 mb-12">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h1 class="leading-none mb-0 flex-1">{{ $tag->name }} Recipes</h1>
            </div>
            <div class="w-full lg:w-1/2 mt-6 lg:mt-0">
                <div class="flex flex-col items-center lg:items-end">
                    <label for="nav" class="text-sm font-semibold text-stone-600 uppercase">Other Categories</label>
                    <select onchange="window.location.href = this.value;" id="nav" name="nav" class="flex-1 mt-2 block w-auto pl-3 pr-10 py-2 text-base border-stone-200 focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm rounded-md">
                        @foreach($tags as $tag_item)
                            <option value="{{ route('tag.show', $tag_item->slug) }}" {{ $tag->id === $tag_item->id ? 'selected' : '' }}>{{ $tag_item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <x-recipes.recipe-list :recipes=$recipes />
@endsection
