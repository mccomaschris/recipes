@extends('layouts.main')
@section('nav')
    <x-spacer />
    <span class="font-semibold text-stone-700">Search Recipes</span>
@endsection

@section('content')
    <h1>Search Results</h1>
    <x-recipes.recipe-list :recipes=$recipes />
@endsection
