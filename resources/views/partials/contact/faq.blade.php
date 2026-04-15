{{-- contact/partials/_faq.blade.php --}}

<div class="mt-20 border-t border-white/5 pt-12">
    <h3 class="text-sm text-white/50 uppercase tracking-widest mb-8">
        Pertanyaan Umum
    </h3>

    <div class="divide-y divide-white/5">

        @php
            $faqs = [
                [
                    'q' => 'Apakah hasil simulasi sama dengan leasing?',
                    'a' => 'Tidak selalu sama, namun estimasi yang diberikan cukup mendekati. Setiap leasing memiliki kebijakan bunga dan biaya tambahan yang berbeda.',
                ],
                [
                    'q' => 'Apa perbedaan bunga flat dan efektif?',
                    'a' => 'Bunga flat dihitung dari pokok awal selama tenor. Bunga efektif dihitung dari sisa pokok, sehingga total bunga lebih kecil namun cicilan awal lebih tinggi.',
                ],
                [
                    'q' => 'Berapa kisaran DP untuk kredit mobil?',
                    'a' => 'Umumnya berkisar antara 10% hingga 30% dari harga kendaraan, tergantung kebijakan leasing dan jenis kendaraan.',
                ],
            ];
        @endphp

        @foreach ($faqs as $faq)
            <div class="faq-item group">
                
                <!-- BUTTON -->
                <button class="faq-btn w-full flex items-center justify-between py-5 text-left transition">
                    
                    <span class="text-sm text-white/70 group-hover:text-white transition">
                        {{ $faq['q'] }}
                    </span>

                    <!-- ICON -->
                    <span class="faq-icon transition-transform duration-300">
                        <svg class="w-4 h-4 text-[#E8FF47]" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </span>

                </button>

                <!-- CONTENT -->
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="pb-5 pr-6 text-sm text-white/40 leading-relaxed">
                        {{ $faq['a'] }}
                    </div>
                </div>

            </div>
        @endforeach

    </div>
</div>