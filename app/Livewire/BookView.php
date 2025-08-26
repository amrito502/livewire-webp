<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookView extends Component
{
    public $book;

    public function mount($id)
    {
        $this->book = Book::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.book-view');
    }
}
