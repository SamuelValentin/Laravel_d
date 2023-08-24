<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateProduct extends Component
{
    public $name;
    public $successmessage;

    public function submitForm()
    {
        $this->validate([
            'name' => 'required|min:3',
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
        ]);

        // Execution doesn't reach here if validation fails.

        // Persist contact form submission in database.

        Category::create([
            'name' => $this->name,
        ]);

        $this->resetInputFields();

        $this->successmessage = 'Produto cadastrado com sucesso!';

        session()->flash('message', $this->successmessage);

    }

    public function render()
    {
        return view('livewire.create-category');
    }

    private function resetInputFields()
    {
        $this->name = '';
    }
}
