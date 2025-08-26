<div class="max-w-md mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-5 text-gray-800">📖 Create Book</h2>

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 px-4 py-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <!-- Title -->
        <div>
            <label class="block text-gray-700 font-semibold">Title</label>
            <input type="text" wire:model="title"
                   class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-400 p-2">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Author -->
        <div>
            <label class="block text-gray-700 font-semibold">Author</label>
            <input type="text" wire:model="author"
                   class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-400 p-2">
            @error('author') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Rating -->
        <div>
            <label class="block text-gray-700 font-semibold">Rating (1-5)</label>
            <input type="number" min="1" max="5" wire:model="rating"
                   class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-400 p-2">
            @error('rating') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-2 rounded-lg shadow hover:bg-indigo-700">
                Save Book
            </button>
        </div>
    </form>
</div>
