<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RecipeController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
Route::get('/search-recipes/', [RecipeController::class, 'search'])->name('recipe.search');
Route::get('/random/', [RecipeController::class, 'random'])->name('recipe.random');
Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
