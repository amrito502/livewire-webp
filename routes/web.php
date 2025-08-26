<?php

use App\Livewire\BookEdit;
use App\Livewire\BookList;
use App\Livewire\BookView;
use App\Livewire\CreateBook;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', BookList::class);
Route::get('/create', CreateBook::class);
Route::get('/books/{id}/edit', BookEdit::class)->name('books.edit');
Route::get('/books/{id}/view', BookView::class)->name('books.view');
