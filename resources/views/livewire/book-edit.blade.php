<div class="max-w-md mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-5 text-gray-800">✏️ Edit Book</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 px-4 py-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-4">
        <!-- Title -->
        <div>
            <label class="block text-gray-700 font-semibold">Title</label>
            <input type="text" wire:model="title"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:border-indigo-400">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Author -->
        <div>
            <label class="block text-gray-700 font-semibold">Author</label>
            <input type="text" wire:model="author"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:border-indigo-400">
            @error('author') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Rating -->
        <div>
            <label class="block text-gray-700 font-semibold">Rating (1-5)</label>
            <input type="number" min="1" max="5" wire:model="rating"
                   class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:border-indigo-400">
            @error('rating') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit -->
        <div>
            <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-lg hover:bg-indigo-700">
                Update Book
            </button>
        </div>
    </form>
</div>
