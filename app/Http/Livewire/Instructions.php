<?php

namespace App\Http\Livewire;

use App\Models\Instruction;
use App\Models\Recipe;
use Livewire\Component;

class Instructions extends Component
{
    public $recipe;
    public $instruction;

    protected $rules = [
        'instruction' => 'required',
    ];

    public function refreshRecipe()
    {
        $this->recipe = Recipe::find($this->recipe->id);
    }

    public function submit()
    {
        $this->validate();

        Instruction::create([
            'recipe_id' => $this->recipe->id,
            'instruction' => $this->instruction
        ]);

        $this->instruction = '';

        $this->refreshRecipe();

        session()->flash('message', 'This instruction has been added.');

    }

    public function render()
    {
        return view('livewire.instructions');
    }
}
