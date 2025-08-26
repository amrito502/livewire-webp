<div>
    <div class="container card p-3">
        <h3 class="text-lg font-bold mb-4 mt-5">📚 Book List</h3>

        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Author</th>
                    <th class="border px-4 py-2">Rating</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr wire:key="book-{{ $book->id }}">
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->author }}</td>
                        <td class="border px-4 py-2">{{ $book->rating }}</td>
                        <td class="border px-4 py-2">
                            <!-- View button -->
                            <a wire:navigate href="{{ route('books.view', $book->id) }}"
                                class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                                View
                            </a>
                            <a wire:navigate href="{{ route('books.edit', $book->id) }}"
                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                Edit
                            </a>


                            <!-- Delete button -->
                            <button wire:click="delete({{ $book->id }})"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2"
                                onclick="return confirm('Are you sure you want to delete this book?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
