{{-- ======== TENTANG PERUSAHAAN (ANIMATED SVG) ======== --}}
<section class="max-w-5xl mx-auto px-6 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        {{-- Ilustrasi kiri --}}
        <div class="flex items-center justify-center">
            <svg viewBox="0 0 300 260" class="w-full max-w-sm opacity-90">

                <style>
                    .part {
                        opacity: 0;
                        transform: translateY(25px) scale(0.95);
                        animation: build 0.7s cubic-bezier(0.22, 1, 0.36, 1) forwards;
                    }

                    @keyframes build {
                        to {
                            opacity: 1;
                            transform: translateY(0) scale(1);
                        }
                    }

                    /* Delay sequence */
                    .d1 { animation-delay: 0.1s; }
                    .d2 { animation-delay: 0.2s; }
                    .d3 { animation-delay: 0.3s; }
                    .d4 { animation-delay: 0.4s; }
                    .d5 { animation-delay: 0.5s; }
                    .d6 { animation-delay: 0.6s; }
                    .d7 { animation-delay: 0.7s; }
                    .d8 { animation-delay: 0.8s; }
                    .d9 { animation-delay: 0.9s; }
                </style>

                <!-- GROUND -->
                <line x1="10" y1="230" x2="290" y2="230"
                      stroke="#E8FF47" stroke-width="0.8" stroke-opacity="0.2"
                      class="part d1"/>

                <!-- GEDUNG KIRI -->
                <rect x="30" y="110" width="55" height="120" rx="3"
                      fill="none" stroke="#E8FF47" stroke-width="1" stroke-opacity="0.4"
                      class="part d2"/>

                <!-- GEDUNG KANAN -->
                <rect x="215" y="110" width="55" height="120" rx="3"
                      fill="none" stroke="#E8FF47" stroke-width="1" stroke-opacity="0.4"
                      class="part d2"/>

                <!-- GEDUNG UTAMA -->
                <rect x="90" y="60" width="120" height="170" rx="4"
                      fill="none" stroke="#E8FF47" stroke-width="1.5"
                      class="part d3"/>

                <!-- ATAP -->
                <path d="M80 60 L150 20 L220 60 Z"
                      fill="none" stroke="#E8FF47" stroke-width="1.5"
                      class="part d4"/>

                <!-- PINTU -->
                <rect x="130" y="190" width="40" height="40" rx="2"
                      fill="#E8FF47" fill-opacity="0.1"
                      stroke="#E8FF47" stroke-width="1"
                      class="part d5"/>

                <!-- JENDELA BARIS 1 -->
                <rect x="105" y="80" width="25" height="22"
                      fill="#E8FF47" fill-opacity="0.08"
                      stroke="#E8FF47" stroke-width="0.8"
                      class="part d6"/>
                <rect x="170" y="80" width="25" height="22"
                      fill="#E8FF47" fill-opacity="0.08"
                      stroke="#E8FF47" stroke-width="0.8"
                      class="part d6"/>

                <!-- JENDELA BARIS 2 -->
                <rect x="105" y="118" width="25" height="22"
                      fill="#E8FF47" fill-opacity="0.08"
                      stroke="#E8FF47" stroke-width="0.8"
                      class="part d7"/>
                <rect x="170" y="118" width="25" height="22"
                      fill="#E8FF47" fill-opacity="0.08"
                      stroke="#E8FF47" stroke-width="0.8"
                      class="part d7"/>

                <!-- JENDELA BARIS 3 -->
                <rect x="105" y="156" width="25" height="22"
                      fill="#E8FF47" fill-opacity="0.08"
                      stroke="#E8FF47" stroke-width="0.8"
                      class="part d8"/>
                <rect x="170" y="156" width="25" height="22"
                      fill="#E8FF47" fill-opacity="0.08"
                      stroke="#E8FF47" stroke-width="0.8"
                      class="part d8"/>

            </svg>
        </div>

        {{-- Teks kanan --}}
        <div>
            <p class="text-[#E8FF47] text-xs font-semibold uppercase tracking-widest mb-3">
                Profil Kami
            </p>

            <h2 class="text-3xl font-black tracking-tight mb-5"
                style="font-family:'Playfair Display',serif;">
                Bantu Anda Rencanakan Kredit Mobil & Motor
            </h2>

            <p class="text-white/40 text-sm leading-relaxed mb-4">
                AutoCredit hadir bukan sekadar aplikasi simulasi cicilan,
                tapi sebagai teman yang membantu calon pembeli kendaraan memahami
                skema pembayaran secara transparan.
            </p>

            <p class="text-white/40 text-sm leading-relaxed">
                Sejak 2020, AutoCredit sudah digunakan oleh puluhan ribu pengguna
                di Indonesia dan menjadi referensi awal sebelum konsultasi dengan dealer.
            </p>
        </div>

    </div>
</section>