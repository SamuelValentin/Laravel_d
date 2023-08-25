<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class EditCategory extends Component
{
    public $category;
    public $name;
    public $successmessage;

    public function mount( Category $category) {
        $this->category = $category;
        $this->name = $category->name;
    }

    public function removeCategory(int $category_id){
        Category::where('user_id', auth()->user()->id)->where('id', $category_id)->delete();

        $this->successmessage = 'Categoria removida com sucesso!';
    }

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

        $this->category->update([
            'name' => $this->name,
        ]);

        $this->successmessage = 'Categoria atualizada com sucesso!';

        session()->flash('message', $this->successmessage);

    }

    public function render()
    {
        return view('livewire.edit-category');
    }
}
