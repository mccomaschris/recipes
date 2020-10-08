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
        $random = Recipe::inRandomOrder()->take(10)->get();
        return view('recipes.index', ['random' => $random]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:recipes|max:255',
        ]);

        $recipe = Recipe::create([
            'title' => $request->title,
            'description' => $request->description,
            'notes' => $request->notes,
            'secret_notes' => $request->secret_notes,
            'favorite' => $request->favorite ? 1 : 0
        ]);

        return redirect()->route('recipe.show', ['recipe' => $recipe->slug]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required|unique:recipes,title,' . $recipe->id
        ]);

        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->notes = $request->notes;
        $recipe->secret_notes = $request->secret_notes;
        $recipe->favorite = $request->favorite ? 1 : 0;
        $recipe->save();

        return redirect()->route('recipe.show', ['recipe' => $recipe->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
