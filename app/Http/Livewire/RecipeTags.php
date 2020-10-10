<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use App\Models\Tag;
use Livewire\Component;

class RecipeTags extends Component
{

    public Recipe $recipe;
    public $tags;

    protected $listeners = ['addTag', 'deleteTag'];

    public function mount() {
        $this->tags = json_encode($this->recipe->tags->pluck('name'));
    }

    public function addTag($tagName) {
        $tag = Tag::firstOrCreate(['name' => $tagName]);
        $this->recipe->tags()->attach($tag->id);
    }

    public function deleteTag($tagName) {
        $tag = Tag::where('name', $tagName)->first();
        $this->recipe->tags()->detach($tag->id);
    }

    public function render()
    {
        return view('livewire.recipe-tags');
    }
}
