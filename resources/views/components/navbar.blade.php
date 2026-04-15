<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-black border-b border-white/10">
    <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">

        <x-logo />

        <div class="hidden md:flex gap-8 text-sm font-medium" style="font-family:'Inter',sans-serif;">
            <a href="{{ route('home') }}"
                class="transition {{ request()->routeIs('home') ? 'text-[#E8FF47]' : 'text-white/50 hover:text-[#E8FF47]' }}">Beranda</a>
            <a href="{{ route('about') }}"
                class="transition {{ request()->routeIs('about') ? 'text-[#E8FF47]' : 'text-white/50 hover:text-[#E8FF47]' }}">Tentang
                Perusahaan</a>
            <a href="{{ route('contact') }}" class="transition text-white/50 hover:text-[#E8FF47]">Kontak</a>
        </div>

        <div class="md:hidden">
            <button @click="open = true" class="text-white p-2">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <x-sidebar />
</nav>
