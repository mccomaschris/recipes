<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use App\Models\Tag;
use Livewire\Component;

class SearchRecipes extends Component
{
    public $search;
    public $tag;

    protected $queryString = [
        'search' => ['except' => ''],
        'tag' => ['except' => ''],
    ];

    public function getTag($tagName) {
        $tagQuery = Tag::where('name', $tagName)->first();
        if ($this->tag == $tagQuery->id ) {
            $this->tag = '';
        } else {
            $this->tag = $tagQuery->id;
        }
    }

    public function render()
    {
        return view('livewire.search-recipes', [
            'recipes' => Recipe::query()
                ->when($this->search, fn($query, $search) => $query->where('title', 'like', '%' . $search . '%'))
                ->when($this->tag, function ($query, $tag) {
                    return $query->whereHas('tags', function($query) use($tag){
                        $query->where('tag_id', $tag);
                    });
                })
                ->get(),
            'tags' => Tag::orderBy('featured', 'desc')->orderBy('name', 'asc')->get(),
        ]);
    }
}
