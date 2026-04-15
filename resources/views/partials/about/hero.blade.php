<section class="relative overflow-hidden py-32 flex items-center justify-center bg-[#0D0D0D]">

    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 opacity-[0.03]"
            style="background-image: radial-gradient(#E8FF47 1px, transparent 1px); background-size: 40px 40px;">
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-[#E8FF47]/10 blur-[120px] rounded-full">
        </div>
    </div>

    <div class="absolute hidden md:block w-24 h-24 border border-[#E8FF47]/20 rounded-full top-20 left-20 animate-bounce"
        style="animation-duration: 6s;"></div>
    <div class="absolute hidden md:block w-32 h-32 border border-white/5 rounded-3xl bottom-10 right-20 animate-spin"
        style="animation-duration: 15s;"></div>

    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto">


        <h1 class="text-5xl md:text-7xl font-black tracking-tight leading-[1.1] mb-8 text-white"
            style="font-family:'Playfair Display',serif;">
            Tentang kami <br>
            <span class="relative">
                <span class="text-[#E8FF47]">AutoCredit</span>
                <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 300 8" fill="none"
                    preserveAspectRatio="none">
                    <path d="M1 5.5C40 2 120 2 299 5.5" stroke="#E8FF47" stroke-width="3" stroke-linecap="round" />
                </svg>
            </span>
        </h1>

        <p class="text-white/60 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto font-light transition-all duration-1000 opacity-0 translate-y-4 animate-in fade-in slide-in-from-bottom-4 fill-mode-forwards"
            style="font-family:'Inter',sans-serif; animation-delay: 500ms;">
            Kami hadir untuk membantu masyarakat Indonesia merencanakan pembelian
            kendaraan impian dengan simulasi kredit yang transparan dan mudah dipahami.
        </p>

        <div class="mt-16 animate-bounce opacity-40">
            <div class="w-[1px] h-12 bg-gradient-to-b from-[#E8FF47] to-transparent mx-auto"></div>
        </div>
    </div>
</section>

<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-in {
        animation: fade-in-up 1s ease-out forwards;
    }
</style>
