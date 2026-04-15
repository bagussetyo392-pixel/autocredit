<section class="relative max-w-6xl mx-auto px-6 py-20 bg-[#0D0D0D]">


    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-b from-black/0 via-black/60 to-black"></div>
    </div>


    <div class="absolute inset-0 -z-10"
        style="background: radial-gradient(ellipse at 50% 20%, rgba(232,255,71,0.05) 0%, transparent 70%);">
    </div>


    <div class="text-center mb-14">
        <p class="text-[#E8FF47] text-xs font-semibold uppercase tracking-[0.2em] mb-4"
            style="font-family:'Inter',sans-serif;">
            Edukasi Kredit
        </p>

        <h2 class="text-3xl md:text-4xl font-black text-white tracking-tight mb-4"
            style="font-family:'Playfair Display',serif;">
            Cara Kerja <span class="text-[#E8FF47]">Kredit Mobil</span>
        </h2>

        <p class="text-white/50 text-sm md:text-base max-w-xl mx-auto" style="font-family:'Inter',sans-serif;">
            Pahami dulu komponen kredit sebelum simulasi, agar hasil perhitungan lebih mudah dipahami.
        </p>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        @foreach ([['no' => '01', 'judul' => 'Harga OTR & Uang Muka (DP)', 'isi' => 'Harga On The Road adalah harga total mobil siap pakai. DP dibayar di awal — semakin besar DP, semakin kecil pokok pinjaman.'], ['no' => '02', 'judul' => 'Pokok Pinjaman', 'isi' => 'Jumlah yang dibiayai leasing = Harga OTR dikurangi DP. Inilah angka dasar yang dihitung cicilannya.'], ['no' => '03', 'judul' => 'Bunga Flat vs Efektif', 'isi' => 'Bunga flat dihitung dari pokok awal setiap bulan. Bunga efektif dihitung dari sisa pokok — lazim di KPR, jarang di kredit mobil.'], ['no' => '04', 'judul' => 'Tenor & Cicilan', 'isi' => 'Tenor adalah lama cicilan (12–60 bulan). Tenor panjang = cicilan lebih ringan, tapi total bunga lebih besar.']] as $step)
            <div
                class="bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl p-6 hover:border-[#E8FF47]/40 transition duration-300">

                <span class="inline-block text-xs font-bold text-[#E8FF47] bg-[#E8FF47]/10 rounded-full px-3 py-1 mb-4">
                    {{ $step['no'] }}
                </span>

                <h3 class="text-sm font-semibold text-white mb-2">
                    {{ $step['judul'] }}
                </h3>

                <p class="text-xs text-white/60 leading-relaxed">
                    {{ $step['isi'] }}
                </p>
            </div>
        @endforeach
    </div>


    <div class="flex flex-wrap justify-center gap-3">
        <div class="bg-white/5 border border-white/10 rounded-full px-4 py-2 text-xs text-white/60 backdrop-blur">
            Rumus:
            <span class="font-semibold text-white">
                (Pokok + Bunga) ÷ Tenor
            </span>
        </div>

        <div class="bg-white/5 border border-white/10 rounded-full px-4 py-2 text-xs text-white/60 backdrop-blur">
            Bunga flat:
            <span class="font-semibold text-white">
                2% – 5% / tahun
            </span>
        </div>

        <div class="bg-white/5 border border-white/10 rounded-full px-4 py-2 text-xs text-white/60 backdrop-blur">
            Tenor:
            <span class="font-semibold text-white">
                12 – 60 bulan
            </span>
        </div>
    </div>

</section>
