<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class SearchRecipes extends Component
{
    public $recipes = [];
    public $search;

    public function updated()
    {
        $this->recipes = Recipe::where('title', 'like', '%' . $this->search . '%')->get();
    }

    public function render()
    {
        return view('livewire.search-recipes');
    }
}
