@extends('layouts.main')

@section('content')
    <h1 class="hidden">Recipes</h1>
    <h2>Recently Added</h2>
    <x-recipes.recipe-list :recipes=$recents />

    <h2>Favorites</h2>
    <x-recipes.recipe-list :recipes=$favorites />
@endsection
