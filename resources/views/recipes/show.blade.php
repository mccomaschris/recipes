@extends('layouts.main')

@section('nav')
    <x-spacer />
    <span class="font-semibold text-stone-700">{{ $recipe->title }}</span>
@endsection

@section('content')
    <div class="flex flex-wrap lg:-mx-12">
        <div class="w-full lg:w-1/3 lg:px-12"></div>
        <div class="w-full lg:w-2/3 lg:px-12">
            <h1>{{ $recipe->title }}</h1>
            @if($recipe->tags)
            <div class="my-6">
                @foreach ($recipe->tags as $tag)
                    <x-tags.active href="{{ route('tag.show', $tag->slug) }}">{{ $tag->name }} ({{ $tag->recipe_count }})</x-tag>
                @endforeach
            </div>
        @endif
        </div>
    </div>

<div class="flex flex-wrap lg:-mx-12">
    <div class="w-full lg:w-1/3 lg:px-12">
        @if ($recipe->image_url)
            <img src="/{{ $recipe->image_url }}" class="rounded shadow-sm w-full" />
        @endif

        <h2>Ingredients</h2>
        <ul class="list-none pl-0">
        @forelse ($recipe->ingredients as $ingredient)
            <li class="pl-0">{{ $ingredient->amount }} {{ str_plural($ingredient->measurement, $ingredient->amount) }} {{ $ingredient->ingredient }}</li>
        @empty
            <p>There are no ingredients for this recipe</p>
        @endforelse
        </ul>
    </div>
    <div class="w-full lg:w-2/3 lg:px-12">
        {!! $recipe->description !!}

        <h2>Instructions</h2>
        <div>
            <ul class="list-none pl-0 space-y-8">
                @forelse ($recipe->instructions as $instruction)
                    <li class="pl-0">
                        <h3>Step {{ $loop->iteration  }}</h3>
                        {{ $instruction->instruction }}
                    </li>
                @empty
                    <p>There are no instructions for this recipe</p>
                @endforelse
            </ul>
        </div>

        @if($recipe->notes)
            <h2>Notes</h2>
            {!! $recipe->notes !!}
        @endif

    </div>
</div>
@endsection
