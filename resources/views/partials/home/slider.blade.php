<section id="beranda" class="relative overflow-hidden h-[500px] flex items-center justify-center bg-[#0D0D0D]">
    <div class="absolute inset-0 transition-opacity duration-1000"
        style="background: radial-gradient(ellipse at 60% 50%, rgba(232,255,71,0.08) 0%, transparent 65%);">
    </div>

    <div class="relative text-center px-6 z-10" id="slider-container">
        <div id="slider-content" class="transition-all duration-700 ease-out transform translate-y-0 opacity-100">
            <p id="slide-label" class="text-[#E8FF47] text-xs font-semibold uppercase tracking-[0.2em] mb-4"
                style="font-family:'Inter',sans-serif;">
                Simulasi Kredit Terpercaya
            </p>
            <h1 id="slide-title" class="text-4xl md:text-6xl font-black tracking-tight leading-tight mb-6 text-white"
                style="font-family:'Playfair Display',serif;">
                Hitung Cicilan <span class="text-[#E8FF47]">Mobil Impianmu</span>
            </h1>
            <p id="slide-desc" class="text-white/50 text-base md:text-lg max-w-lg mx-auto font-light"
                style="font-family:'Inter',sans-serif;">
                Transparan, akurat, dan mudah dipahami. Rencanakan keuanganmu sekarang.
            </p>
        </div>
    </div>

    <div class="absolute bottom-10 flex gap-3">
        <button onclick="goSlide(0)" class="dot w-8 h-1 rounded-full bg-[#E8FF47] transition-all duration-500"></button>
        <button onclick="goSlide(1)" class="dot w-3 h-1 rounded-full bg-white/20 transition-all duration-500"></button>
        <button onclick="goSlide(2)" class="dot w-3 h-1 rounded-full bg-white/20 transition-all duration-500"></button>
    </div>
</section>

<script>
    const slides = [{
            label: "Simulasi Kredit Terpercaya",
            title: "Hitung Cicilan <span style='color:#E8FF47'>Mobil Impianmu</span>",
            desc: "Transparan, akurat, dan mudah dipahami. Rencanakan keuanganmu sekarang."
        },
        {
            label: "Bunga Tetap & Jelas",
            title: "Bunga <span style='color:#E8FF47'>20%</span> Flat, Tanpa Kejutan",
            desc: "Tidak ada biaya tersembunyi. Semua kalkulasi ditampilkan secara transparan."
        },
        {
            label: "Fleksibel & Mudah",
            title: "DP & Tenor <span style='color:#E8FF47'>Sesuai Kemampuan</span>",
            desc: "Atur sendiri uang muka dan jangka waktu cicilan sesuai kondisi keuanganmu."
        }
    ];

    let current = 0;
    let isAnimating = false;

    function goSlide(i) {
        if (isAnimating) return;
        isAnimating = true;

        const container = document.getElementById('slider-content');
        const dots = document.querySelectorAll('.dot');

        container.style.opacity = '0';
        container.style.transform = 'translateY(-20px)';

        setTimeout(() => {
            current = i;
            const s = slides[i];

            document.getElementById('slide-label').innerText = s.label;
            document.getElementById('slide-title').innerHTML = s.title;
            document.getElementById('slide-desc').innerText = s.desc;

            container.style.transform = 'translateY(20px)';

            container.offsetHeight;

            container.style.opacity = '1';
            container.style.transform = 'translateY(0)';

            dots.forEach((d, idx) => {
                if (idx === i) {
                    d.classList.replace('bg-white/20', 'bg-[#E8FF47]');
                    d.classList.replace('w-3', 'w-8');
                } else {
                    d.classList.replace('bg-[#E8FF47]', 'bg-white/20');
                    d.classList.replace('w-8', 'w-3');
                }
            });

            isAnimating = false;
        }, 500);
    }

    let slideTimer = setInterval(() => goSlide((current + 1) % slides.length), 5000);


    document.querySelectorAll('.dot').forEach(btn => {
        btn.addEventListener('click', () => clearInterval(slideTimer));
    });
</script>
