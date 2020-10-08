<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use Livewire\Component;

class EditIngredient extends Component
{

    public $ingredient;
    public $newAmount;
    public $newMeasurement;
    public $newIngredient;

    protected $rules = [
        'newAmount' => 'required',
        'newIngredient' => 'required',
    ];

    public function mount()
    {
        $this->newAmount = $this->ingredient->amount;
        $this->newMeasurement = $this->ingredient->measurement;
        $this->newIngredient = $this->ingredient->ingredient;
    }

    public function save()
    {
        $this->validate();

        $ingredient = Ingredient::findOrFail($this->ingredient->id);
        $ingredient->amount = $this->newAmount;
        $ingredient->measurement = $this->newMeasurement;
        $ingredient->ingredient = $this->newIngredient;
        $ingredient->save();

        $this->ingredient = $ingredient;
        $this->newAmount = $ingredient->amount;
        $this->newMeasurement = $ingredient->measurement;
        $this->newIngredient = $ingredient->ingredient;

        session()->flash('message', 'This ingredient item has been updated.');
    }

    public function render()
    {
        return view('livewire.edit-ingredient');
    }
}
