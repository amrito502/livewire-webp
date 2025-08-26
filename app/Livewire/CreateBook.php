<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class CreateBook extends Component
{
      public $title, $author, $rating;

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        session()->flash('message', 'Book created successfully! 🎉');

        // Reset fields after save
        $this->reset(['title', 'author', 'rating']);
    }
    public function render()
    {
        return view('livewire.create-book');
    }
}
