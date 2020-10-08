@extends('layouts.main')


@section('content')
    <h1 class="mt-4 font-bold text-xl mb-4">
        {{ $recipe->title }}
        @if($recipe->favorite)
        <span class="ml-3 uppercase rounded bg-green-400 text-white text-xs font-semibold px-3 py-1">Favorite</span>
        @endif
    </h1>

    @if($recipe->description)
        <div class="mb-10">
            {{ $recipe->description }}
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
@endsection