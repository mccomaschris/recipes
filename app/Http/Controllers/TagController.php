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
        $recipes = Recipe::whereHas('tags', function($query) use($tag) {
            $query->where('tags.id', $tag->id);
        })->get();
    }
}
