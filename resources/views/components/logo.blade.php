<a href="{{ route('home') }}" class="flex items-center gap-3">

    {{-- Ganti file logo di: public/images/logo.svg (atau .png) --}}
    <img
        src="{{ asset('images/logo.png') }}"
        alt="AutoCredit"
        class="h-15 w-auto"
        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
    >

    {{-- Fallback otomatis kalau file logo belum ada --}}
    <div class="bg-[#E8FF47] text-black text-sm px-3 py-2 rounded-lg"
         style="font-family:'Inter',sans-serif; font-weight:800; display:none;">
        AC
    </div>

    <div class="leading-tight">
        <div style="font-family:'Playfair Display',serif;
                    font-weight:900; font-size:1.1rem;
                    color:#F0F0F0; letter-spacing:-0.5px;">
            AutoCredit
        </div>
        <div style="font-family:'Inter',sans-serif;
                    font-weight:300; font-size:0.6rem;
                    color:#E8FF47; letter-spacing:4px;">
            KREDIT KENDARAAN
        </div>
    </div>

</a>