<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    public $name;
    public $price;
    public $user_id;
    public $categories_id;
    public $successmessage;

    public function submitForm()
    {
        $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
        ],
        [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O campo nome deve ter no mínimo 3 caracteres.',
            'price.required' => 'O campo preço é obrigatório.',
            'price.numeric' => 'O campo preço deve ser um número.',
        ]);

        // Execution doesn't reach here if validation fails.

        // Persist contact form submission in database.

        Product::create([
            'name' => $this->name,
            'price' => $this->price,
            'user_id' => $this->user_id,
            'categories_id' => $this->categories_id
        ]);

        $this->resetInputFields();

        $this->successmessage = 'Produto cadastrado com sucesso!';

        session()->flash('message', $this->successmessage);

    }

    public function render()
    {
        return view('livewire.create-product');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->price = '';
        $this->categories_id = '';

    }
}
