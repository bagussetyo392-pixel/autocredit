<div>
    <div x-show="open" @click="open = false" class="fixed inset-0 bg-black/60 z-40"
        x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak>
    </div>

    <div x-show="open"
        class="fixed top-0 right-0 h-full w-72 bg-[#111111] text-gray-200 z-50 shadow-2xl border-l border-gray-800"
        x-transition:enter="transform transition ease-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in duration-200"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-cloak>

        <div class="flex justify-between items-center px-5 py-4 border-b border-gray-800">
            <h2 class="text-lg font-semibold">Menu</h2>

            <button @click="open = false"
                class="text-gray-400 hover:text-white transition transform hover:rotate-90 duration-300">
                ✕
            </button>
        </div>

        <nav class="flex flex-col mt-2 text-sm">

            <a href="{{ route('home') }}" class="px-5 py-3 mx-2 rounded-lg transition hover:bg-gray-800">
                Beranda
            </a>

            <a href="{{ route('about') }}" class="px-5 py-3 mx-2 rounded-lg transition hover:bg-gray-800">
                Tentang Perusahaan
            </a>

            <a href="{{ route('contact') }}" class="px-5 py-3 mx-2 rounded-lg transition hover:bg-gray-800">
                Kontak
            </a>

        </nav>

    </div>

</div>
