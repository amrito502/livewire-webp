<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookEdit extends Component
{
    public $bookId, $title, $author, $rating;

    public function mount($id)
    {
        $book = Book::findOrFail($id);
        $this->bookId = $book->id;
        $this->title  = $book->title;
        $this->author = $book->author;
        $this->rating = $book->rating;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $book = Book::findOrFail($this->bookId);
        $book->update([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        session()->flash('message', 'Book updated successfully 🎉');
    }

    public function render()
    {
        return view('livewire.book-edit');
    }
}
