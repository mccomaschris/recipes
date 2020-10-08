@extends('layouts.main')

@section('title', $recipe->title)

@section('content')
    @if($recipe->favorite)
        <div class="mb-6">
        <span class="uppercase rounded bg-green-400 text-white text-xs font-semibold px-3 py-1">Favorite</span>
        </div>
    @endif

    @if($recipe->description)
        <div class="mb-10">
            {{ $recipe->description }}
        </div>
    @endif

    <div>
        <livewire:ingredients :recipe="$recipe" />
    </div>

    <div class="mt-10">
        <livewire:instructions :recipe="$recipe" />
    </div>

    @if($recipe->notes)
        <div class="mt-10">
            <h2 class="mb-2 font-semibold">Notes</h2>
            {{ $recipe->notes }}
        </div>
    @endif

@endsection