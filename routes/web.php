<?php

use App\Http\Controllers\RecipeController;
use App\Http\Livewire\SearchRecipes;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', SearchRecipes::class)->name('recipe.index');
Route::get('/recipe/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/recipe/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipe.edit');
    Route::put('/recipe/{recipe}', [RecipeController::class, 'update'])->name('recipe.update');
});
