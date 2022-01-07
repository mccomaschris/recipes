<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderby('name')->get();
        $recents = Recipe::orderby('created_at', 'desc')->take(9)->get();
        $favorites = Recipe::where('favorite', true)->inRandomOrder()->take(9)->get();
        $randoms = Recipe::inRandomOrder()->take(9)->get();
        return view('site.index', [
            'recents' => $recents,
            'favorites' => $favorites,
            'randoms' => $randoms,
            'tags' => $tags
        ]);
    }
}
