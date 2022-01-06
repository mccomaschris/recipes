@extends('layouts.main')
@section('nav')
    <x-spacer />
    <span class="font-semibold text-stone-700">Search Recipes</span>
@endsection

@section('content')
    <h1 class="hidden">Recipes</h1>
    <h2>Search Results</h2>
    <x-recipes.recipe-list :recipes=$recipes />
@endsection
