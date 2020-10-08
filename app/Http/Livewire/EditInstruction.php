<?php

namespace App\Http\Livewire;

use App\Models\Instruction;
use Livewire\Component;

class EditInstruction extends Component
{
    public $instruction;
    public $newInstruction;

    protected $rules = [
        'instruction' => 'required',
    ];

    public function mount()
    {
        $this->newInstruction = $this->instruction->instruction;
    }

    public function save()
    {
        $this->validate();

        $instruction = Instruction::findOrFail($this->instruction->id);
        $instruction->instruction = $this->newInstruction;
        $instruction->save();

        $this->instruction = $instruction;
        $this->newInstruction = $instruction;

        session()->flash('message', 'This instruction item has been updated.');

    }

    public function render()
    {
        return view('livewire.edit-instruction');
    }
}
