<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recents = Recipe::take(9)->get();
        $favorites = Recipe::where('favorite', true)->inRandomOrder()->take(9)->get();
        $randoms = Recipe::inRandomOrder()->take(9)->get();
        return view('recipes.index', compact('recents', 'favorites', 'randoms'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }

    /**
     * Show the search results of recipes
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $search_query = $request->input('search');
        } else {
            redirect('/');
        }

        $recipes = Recipe::where('title', 'LIKE', "%{$search_query}%")->get();
        return view('recipes.search', compact('recipes'));
    }
}
