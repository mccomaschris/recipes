<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TagController;

Route::get('/', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
Route::get('/search-recipes/', [RecipeController::class, 'search'])->name('recipe.search');
Route::get('/random/', [RecipeController::class, 'random'])->name('recipe.random');
Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
