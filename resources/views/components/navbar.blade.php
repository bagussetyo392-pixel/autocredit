<nav class="sticky top-0 z-50 bg-black/80 backdrop-blur border-b border-white/10">
    <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo — edit di resources/views/components/logo.blade.php --}}
        <x-logo />

        {{-- Menu Navigasi --}}
        <div class="flex gap-8 text-sm font-medium" style="font-family:'Inter',sans-serif;">

            <a href="{{ route('home') }}"
                class="transition tracking-wide {{ request()->routeIs('home') ? 'text-[#E8FF47]' : 'text-white/50 hover:text-[#E8FF47]' }}">
                Beranda
            </a>

            <a href="{{ route('about') }}"
                class="transition tracking-wide {{ request()->routeIs('about') ? 'text-[#E8FF47]' : 'text-white/50 hover:text-[#E8FF47]' }}">
                Tentang Perusahaan
            </a>

            <a href="{{ route('contact') }}" 
                class="transition tracking-wide text-white/50 hover:text-[#E8FF47]">
                Kontak
            </a>

        </div>
    </div>
</nav>