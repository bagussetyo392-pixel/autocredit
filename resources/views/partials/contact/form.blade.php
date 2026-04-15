{{-- contact/partials/_form.blade.php --}}

<form id="contactForm" method="POST" action="{{ url('/contact') }}" novalidate class="space-y-5">
    @csrf

    {{-- Honeypot anti-spam (hidden) --}}
    <div style="display:none;">
        <input type="text" name="website" tabindex="-1" autocomplete="off">
    </div>

    {{-- Nama --}}
    <div>
        <label class="block text-xs text-white/30 mb-2" for="nama">Nama</label>
        <input id="nama" name="nama" type="text" value="{{ old('nama') }}"
            class="input-field w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-sm text-white placeholder-white/20 focus:outline-none focus:border-[#E8FF47]/50 transition"
            placeholder="Nama kamu">
        <p class="field-error text-xs text-red-400 mt-1 hidden"></p>
    </div>

    {{-- Email --}}
    <div>
        <label class="block text-xs text-white/30 mb-2" for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}"
            class="input-field w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-sm text-white placeholder-white/20 focus:outline-none focus:border-[#E8FF47]/50 transition"
            placeholder="email aktif">
        <p class="field-error text-xs text-red-400 mt-1 hidden"></p>
    </div>

    {{-- Jenis Pertanyaan --}}
    <div>
        <label class="block text-xs text-white/30 mb-2" for="jenis">Jenis Pertanyaan</label>
        <select id="jenis" name="jenis"
            class="input-field w-full bg-[#0D0D0D] border border-white/10 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-[#E8FF47]/50 transition appearance-none cursor-pointer">
            <option value="Simulasi kredit mobil">Simulasi kredit mobil</option>
            <option value="Perhitungan DP & bunga">Perhitungan DP & bunga</option>
            <option value="Perbandingan leasing">Perbandingan leasing</option>
            <option value="Masalah teknis">Masalah teknis website</option>
            <option value="Lainnya">Lainnya</option>
        </select>
    </div>

    {{-- Detail Pertanyaan --}}
    <div>
        <label class="block text-xs text-white/30 mb-2" for="pesan">Detail Pertanyaan</label>
        <textarea id="pesan" name="pesan" rows="5"
            class="input-field w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 text-sm text-white placeholder-white/20 focus:outline-none focus:border-[#E8FF47]/50 transition resize-none"
            placeholder="Contoh: harga mobil 200jt, DP 30%, tenor 3 tahun...">{{ old('pesan') }}</textarea>
        <p class="field-error text-xs text-red-400 mt-1 hidden"></p>
    </div>

    {{-- Submit Button --}}
    <div class="pt-2">
        <button id="submitBtn" type="submit"
            class="inline-flex items-center gap-2 px-6 py-3 bg-[#E8FF47] text-black text-sm font-semibold rounded-lg hover:bg-[#d4eb3a] active:scale-95 transition disabled:opacity-60 disabled:cursor-not-allowed">
            <span id="btnIcon">✉</span>
            <span id="btnText">Kirim Pertanyaan</span>
            <svg id="btnSpinner" class="hidden animate-spin w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"/>
            </svg>
        </button>
    </div>

</form>