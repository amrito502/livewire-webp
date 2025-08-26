<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>

<body>
    <nav class="bg-gray-800 text-white px-6 py-3 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold tracking-wide hover:text-gray-300">
                MyApp
            </a>

            <!-- Nav Links -->
            <div class="hidden md:flex space-x-6">
                <a href="/" wire:navigate class="hover:text-gray-300">Book List</a>
                <a href="/create" wire:navigate class="hover:text-gray-300">Create Book</a>
                <a href="/services" wire:navigate class="hover:text-gray-300">Services</a>
                <a href="/contact" wire:navigate class="hover:text-gray-300">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menuBtn" class="focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Nav (hidden by default) -->
        <div id="mobileMenu" class="md:hidden hidden flex-col space-y-2 px-6 pt-2 pb-4 bg-gray-700">
            <a href="/" wire:navigate class="block hover:text-gray-300">Book List</a>
            <a href="/create" wire:navigate class="block hover:text-gray-300">Create Book</a>
            <a href="/services" wire:navigate class="block hover:text-gray-300">Services</a>
            <a href="/contact" wire:navigate class="block hover:text-gray-300">Contact</a>
        </div>
    </nav>

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("menuBtn").addEventListener("click", function() {
            document.getElementById("mobileMenu").classList.toggle("hidden");
        });
    </script>

</body>

</html>
