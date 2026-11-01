<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{
    public $title;
    public $description;
    public $price;
    public $category_id;

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
        'category_id' => 'required',
    ];

    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio.',
        'title.min' => 'Il titolo deve essere di almeno 5 caratteri.',
        'description.required' => 'La descrizione è obbligatoria.',
        'description.min' => 'La descrizione deve essere di almeno 10 caratteri.',
        'price.required' => 'Il prezzo è obbligatorio.',
        'price.numeric' => 'Il prezzo deve essere un numero.',
        'category_id.required' => 'Devi selezionare una categoria.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'Articolo creato con successo!');

        $this->reset();
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article-form', compact('categories'));
    }
}