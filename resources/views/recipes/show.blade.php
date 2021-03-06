@extends('layouts.main')


@section('content')
    <h1 class="mt-4 font-bold text-xl mb-4">
        {{ $recipe->title }}
    </h1>

    @if($recipe->tags)
        <div class="my-6">
            @foreach ($recipe->tags as $tag)
                <x-tags.inactive href="/?tag={{ $tag->id }}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    @endif
    @if($recipe->description)
        <div class="mb-10">
            {!! $recipe->description !!}
        </div>
    @endif

    <div>
        <livewire:ingredients :recipe="$recipe" />
    </div>

    <div class="mt-6">
        <livewire:instructions :recipe="$recipe" />
    </div>

    @if($recipe->notes)
        <div class="mt-10">
            <h2 class="mb-2 font-semibold">Notes</h2>
            {{ $recipe->notes }}
        </div>
    @endif

    @if(Auth::check())

        @if($recipe->secret_notes)
            <div class="mt-10">
                <h2 class="mb-2 font-semibold">Secret Notes</h2>
                {{ $recipe->secret_notes }}
            </div>
        @endif

        <div class="my-6 text-center"><a href="/recipe/{{ $recipe->slug }}/edit" class="text-green-500 underline hover:text-green-700">Edit this Recipe</a></div>
    @endif
@endsection