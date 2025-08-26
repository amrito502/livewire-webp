<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookList extends Component
{

    public function delete(Book $book){
        $book->delete();
    }

    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all()
        ]);
    }
}
