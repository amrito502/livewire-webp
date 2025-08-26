<div class="max-w-md mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-5 text-gray-800">📖 Book Details</h2>

    <p class="mb-2"><span class="font-semibold">Title:</span> {{ $book->title }}</p>
    <p class="mb-2"><span class="font-semibold">Author:</span> {{ $book->author }}</p>
    <p class="mb-4"><span class="font-semibold">Rating:</span> {{ $book->rating }}</p>

    <a wire:navigate href="{{ url()->previous() }}"
       class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
       ⬅ Back
    </a>
</div>
