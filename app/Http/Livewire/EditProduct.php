<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class EditProduct extends Component
{
    public $product;
    public $name;
    public $price;
    public $user_id;
    public $categories_id;
    public $successmessage;

    public function mount( Product $product) {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->user_id = $product->user_id;
        $this->categories_id = $product->categories_id;
    }

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

        $this->product->update([
            'name' => $this->name,
            'price' => $this->price,
            'user_id' => Auth::user()->id,
            'categories_id' => $this->categories_id
        ]);

        $this->successmessage = 'Produto atualizado com sucesso!';

        session()->flash('message', $this->successmessage);

    }

    public function render()
    {
        return view('livewire.edit-product');
    }

}
