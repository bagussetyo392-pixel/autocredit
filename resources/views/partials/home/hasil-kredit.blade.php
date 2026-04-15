{{-- ======== OUTPUT HASIL ======== --}}
<div id="hasil-kredit">

    {{-- Placeholder awal --}}
    <div class="bg-white/5 border border-white/10 rounded-2xl h-full
                flex flex-col items-center justify-center p-12 text-center min-h-64">

        {{-- Ilustrasi SVG Mobil --}}
        <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg"
             class="w-48 mb-6 opacity-40">

            {{-- Badan mobil bawah --}}
            <rect x="10" y="55" width="180" height="28" rx="6"
                  fill="none" stroke="#E8FF47" stroke-width="1.5"/>

            {{-- Atap mobil --}}
            <path d="M45 55 Q55 25 80 22 L120 22 Q145 25 155 55 Z"
                  fill="none" stroke="#E8FF47" stroke-width="1.5"
                  stroke-linejoin="round"/>

            {{-- Kaca depan --}}
            <path d="M112 24 Q138 27 150 55 L112 55 Z"
                  fill="#E8FF47" fill-opacity="0.08"
                  stroke="#E8FF47" stroke-width="1" stroke-linejoin="round"/>

            {{-- Kaca belakang --}}
            <path d="M88 24 Q62 27 50 55 L88 55 Z"
                  fill="#E8FF47" fill-opacity="0.08"
                  stroke="#E8FF47" stroke-width="1" stroke-linejoin="round"/>

            {{-- Kaca tengah --}}
            <rect x="90" y="25" width="20" height="30" rx="1"
                  fill="#E8FF47" fill-opacity="0.06"
                  stroke="#E8FF47" stroke-width="0.8"/>

            {{-- Roda kiri --}}
            <circle cx="48" cy="83" r="14"
                    fill="none" stroke="#E8FF47" stroke-width="1.5"/>
            <circle cx="48" cy="83" r="6"
                    fill="none" stroke="#E8FF47" stroke-width="1"/>
            <circle cx="48" cy="83" r="2"
                    fill="#E8FF47" fill-opacity="0.4"/>

            {{-- Roda kanan --}}
            <circle cx="152" cy="83" r="14"
                    fill="none" stroke="#E8FF47" stroke-width="1.5"/>
            <circle cx="152" cy="83" r="6"
                    fill="none" stroke="#E8FF47" stroke-width="1"/>
            <circle cx="152" cy="83" r="2"
                    fill="#E8FF47" fill-opacity="0.4"/>

            {{-- Lampu depan --}}
            <rect x="172" y="60" width="14" height="6" rx="3"
                  fill="#E8FF47" fill-opacity="0.5"
                  stroke="#E8FF47" stroke-width="0.8"/>

            {{-- Lampu belakang --}}
            <rect x="14" y="60" width="10" height="6" rx="3"
                  fill="#E8FF47" fill-opacity="0.25"
                  stroke="#E8FF47" stroke-width="0.8"/>

            {{-- Garis bawah / ground shadow --}}
            <line x1="25" y1="97" x2="175" y2="97"
                  stroke="#E8FF47" stroke-width="0.5" stroke-opacity="0.2"
                  stroke-dasharray="4 3"/>

        </svg>

        <p class="text-white/20 text-sm leading-relaxed"
           style="font-family:'Inter',sans-serif;">
            Isi form di sebelah kiri lalu klik<br>
            <span class="text-white/50 font-semibold">Hitung Angsuran</span><br>
            untuk melihat hasil simulasi.
        </p>

    </div>

</div>