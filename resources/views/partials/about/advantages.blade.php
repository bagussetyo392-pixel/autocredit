{{-- ======== KEUNGGULAN SLIDER INFINITE ======== --}}
<section class="py-20 bg-[#0A0A0A] overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">
            <p class="text-[#E8FF47] text-xs font-semibold uppercase tracking-widest mb-3">
                Alasan Kenapa Harus Coba
            </p>
            <h2 class="text-3xl font-black tracking-tight text-white" style="font-family:'Playfair Display',serif;">
                Keunggulan AutoCredit
            </h2>
        </div>

        <div class="relative">
            <div class="relative overflow-hidden py-10"> 
                <div id="keunggulanSlider" class="flex transition-transform duration-500 ease-in-out">
                    
                    <div class="slider-item flex-shrink-0 w-full md:w-1/3 px-4">
                        <div class="card-inner bg-white/5 border border-white/10 rounded-2xl p-8 transition-all duration-500 opacity-40 scale-90">
                            <div class="w-12 h-12 rounded-xl bg-[#E8FF47]/10 border border-[#E8FF47]/20 flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#E8FF47" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 8z"/></svg>
                            </div>
                            <h4 class="font-black text-lg mb-3 text-white" style="font-family:'Playfair Display',serif;">Hitungan Terbuka</h4>
                            <p class="text-white/50 text-sm leading-relaxed">Semua komponen biaya dibuka satu per satu, transparan tanpa ada yang disembunyikan.</p>
                        </div>
                    </div>

                    <div class="slider-item flex-shrink-0 w-full md:w-1/3 px-4">
                        <div class="card-inner bg-white/5 border border-white/10 rounded-2xl p-8 transition-all duration-500 opacity-40 scale-90">
                            <div class="w-12 h-12 rounded-xl bg-[#E8FF47]/10 border border-[#E8FF47]/20 flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#E8FF47" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            </div>
                            <h4 class="font-black text-lg mb-3 text-white" style="font-family:'Playfair Display',serif;">Hasil Cepat</h4>
                            <p class="text-white/50 text-sm leading-relaxed">Isi harga, DP, dan tenor, lalu lihat angsuran muncul dalam hitungan detik.</p>
                        </div>
                    </div>

                    <div class="slider-item flex-shrink-0 w-full md:w-1/3 px-4">
                        <div class="card-inner bg-white/5 border border-white/10 rounded-2xl p-8 transition-all duration-500 opacity-40 scale-90">
                            <div class="w-12 h-12 rounded-xl bg-[#E8FF47]/10 border border-[#E8FF47]/20 flex items-center justify-center mb-6">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#E8FF47" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
                            </div>
                            <h4 class="font-black text-lg mb-3 text-white" style="font-family:'Playfair Display',serif;">Mobile Friendly</h4>
                            <p class="text-white/50 text-sm leading-relaxed">Akses nyaman dari perangkat apapun, kapanpun dan di manapun Anda berada.</p>
                        </div>
                    </div>

                </div>
            </div>

            <button onclick="prevSlide()" class="absolute left-0 md:-left-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/5 border border-white/10 text-white hover:bg-[#E8FF47] hover:text-black transition-all">←</button>
            <button onclick="nextSlide()" class="absolute right-0 md:-right-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/5 border border-white/10 text-white hover:bg-[#E8FF47] hover:text-black transition-all">→</button>
        </div>
    </div>

    <script>
        const slider = document.getElementById("keunggulanSlider");
        let items = document.querySelectorAll(".slider-item");
        
        // 1. CLONING: Kita gandakan elemen untuk efek loop tanpa putus
        const firstClone = items[0].cloneNode(true);
        const lastClone = items[items.length - 1].cloneNode(true);
        
        slider.appendChild(firstClone);
        slider.insertBefore(lastClone, items[0]);

        // Update items setelah cloning
        items = document.querySelectorAll(".slider-item");
        
        let currentIndex = 1; // Mulai dari 1 karena index 0 sekarang adalah clone dari kartu terakhir
        let isTransitioning = false;

        function updateSlider(smooth = true) {
            const cardWidth = items[0].offsetWidth;
            const containerWidth = slider.parentElement.offsetWidth;
            
            // Hitung posisi agar kartu aktif tepat di tengah
            const offset = -(currentIndex * cardWidth) + (containerWidth / 2) - (cardWidth / 2);

            if (!smooth) slider.style.transition = "none";
            else slider.style.transition = "transform 0.5s ease-in-out";

            slider.style.transform = `translateX(${offset}px)`;

            // Logika Efek Kartu (Besar/Kecil & Terang/Redup)
            items.forEach((item, index) => {
                const inner = item.querySelector('.card-inner');
                if (index === currentIndex) {
                    inner.classList.replace('opacity-40', 'opacity-100');
                    inner.classList.replace('scale-90', 'scale-105');
                    inner.classList.add('border-[#E8FF47]/50', 'bg-white/10');
                } else {
                    inner.classList.replace('opacity-100', 'opacity-40');
                    inner.classList.replace('scale-105', 'scale-90');
                    inner.classList.remove('border-[#E8FF47]/50', 'bg-white/10');
                }
            });
        }

        function nextSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            currentIndex++;
            updateSlider();
        }

        function prevSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            currentIndex--;
            updateSlider();
        }

        // 2. LOOP LOGIC: Cek jika sudah sampai clone, lalu lompat ke aslinya
        slider.addEventListener('transitionend', () => {
            isTransitioning = false;
            // Jika sampai di clone terakhir, lompat ke kartu pertama asli
            if (currentIndex === items.length - 1) {
                currentIndex = 1;
                updateSlider(false);
            }
            // Jika sampai di clone pertama, lompat ke kartu terakhir asli
            if (currentIndex === 0) {
                currentIndex = items.length - 2;
                updateSlider(false);
            }
        });

        window.addEventListener('resize', () => updateSlider(false));
        
        // Inisialisasi posisi awal
        updateSlider(false);
    </script>
</section>