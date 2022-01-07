<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Tag;
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
        $recipes = Recipe::orderby('created_at', 'desc')->paginate(9);
        $tags = Tag::orderby('name', 'asc')->get();

        return view('recipes.index', [
            'recipes' => $recipes,
            'tags' => $tags,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the search results of recipes
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if (! $request->has('search') || ! $request->has('search') ) {
            redirect('/');
        }

        if ($request->has('search')) {
            $recipes = Recipe::where('title', 'LIKE', "%{$request->input('search')}%")->get();
        }

        if ($request->has('tag')) {
            $recipes = Recipe::whereHas('tags', function($query) use($request) {
                $query->where('tags.id', $request->input('tag'));
            })->get();
        }
        return view('recipes.search', compact('recipes'));
    }

    /**
     * Show the random
     *
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $recipes = Recipe::inRandomOrder()->take(9)->get();
        return view('recipes.random', compact('recipes'));
    }
}
