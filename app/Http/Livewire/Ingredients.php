<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Recipe;
use Livewire\Component;

class Ingredients extends Component
{
    public $recipe;
    public $amount;
    public $measurement = '';
    public $type = '';
    public $ingredient;

    protected $rules = [
        'amount' => 'required',
        'ingredient' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Ingredient::create([
            'recipe_id' => $this->recipe->id,
            'amount' => $this->amount,
            'measurement' => $this->measurement,
            'type' => $this->type,
            'ingredient' => $this->ingredient
        ]);

        $this->amount = '';
        $this->measurement = '';
        $this->type = '';
        $this->ingredient = '';

        $this->recipe = Recipe::find($this->recipe->id);

        session()->flash('message', 'This ingredient has been added.');

    }

    public function render()
    {
        return view('livewire.ingredients');
    }
}
