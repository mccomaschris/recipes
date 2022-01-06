@extends('layouts.main')
@section('nav')
    <x-spacer />
    <span class="font-semibold text-stone-700">Random Recipes</span>
@endsection

@section('content')
    <h1>Random Recipes</h1>
    <x-recipes.recipe-list :recipes=$recipes />
@endsection
