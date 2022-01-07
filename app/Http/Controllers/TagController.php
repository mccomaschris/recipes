<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display the tag resourece.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $tags = Tag::orderby('name', 'asc')->get();

        $recipes = Recipe::whereHas('tags', function($query) use($tag) {
            $query->where('tags.slug', $tag->slug);
        })->get();

        return view('tags.show', [
            'tags' => $tags,
            'tag' => $tag,
            'recipes' => $recipes
        ]);
    }
}
