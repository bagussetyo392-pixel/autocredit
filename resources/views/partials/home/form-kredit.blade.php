{{-- ======== FORM INPUT ======== --}}
<div class="bg-white/5 border border-white/10 rounded-2xl p-8">
    <h3 class="text-lg font-bold mb-6 text-white/70">Data Kendaraan</h3>

    <form id="form-kredit" class="space-y-5">
        @csrf

        {{-- Harga Mobil --}}
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-white/40 mb-2">
                Harga Mobil (Rp)
            </label>
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/30 text-sm">Rp</span>
                <input
                    type="text"
                    id="harga_mobil_display"
                    placeholder="0"
                    class="w-full bg-black border border-white/10 rounded-lg px-4 py-3 pl-10
                        text-white placeholder-white/20
                        focus:outline-none focus:border-[#E8FF47] transition"
                >
                {{-- Input hidden yang dikirim ke server --}}
                <input type="hidden" name="harga_mobil" id="harga_mobil">
            </div>
            <p class="text-red-400 text-xs mt-1 hidden" id="error-harga_mobil"></p>
        </div>

        {{-- DP --}}
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-white/40 mb-2">
                DP (%)
            </label>
            <div class="relative">
                <input
                    type="text"
                    name="dp"
                    id="dp"
                    placeholder="0"
                    maxlength="5"
                    class="w-full bg-black border border-white/10 rounded-lg px-4 py-3 pr-12
                        text-white placeholder-white/20
                        focus:outline-none focus:border-[#E8FF47] transition"
                >
                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-white/30 text-sm">%</span>
            </div>
            <p class="text-red-400 text-xs mt-1 hidden" id="error-dp"></p>
        </div>

        {{-- Tenor --}}
        <div>
            <label class="block text-xs font-bold uppercase tracking-widest text-white/40 mb-2">
                Tenor (Tahun)
            </label>
            <div class="relative">
                <input
                    type="text"
                    name="tenor"
                    id="tenor"
                    placeholder="0"
                    maxlength="2"
                    class="w-full bg-black border border-white/10 rounded-lg px-4 py-3 pr-20
                        text-white placeholder-white/20
                        focus:outline-none focus:border-[#E8FF47] transition"
                >
                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-white/30 text-sm">Tahun</span>
            </div>
            <p class="text-red-400 text-xs mt-1 hidden" id="error-tenor"></p>
        </div>
        {{-- Tombol --}}
        <button
        type="submit"
        id="btn-submit"
        class="w-full bg-[#E8FF47] text-black font-black py-4 rounded-lg
            text-sm uppercase tracking-widest hover:bg-yellow-300 transition mt-2
            disabled:opacity-60 disabled:cursor-not-allowed"
        style="font-family:'Inter',sans-serif; font-weight:800; letter-spacing:0.1em;">

        <span id="btn-text" class="flex items-center justify-center gap-2">
            Hitung Angsuran
        </span>

        <span id="btn-loading" class="hidden items-center justify-center gap-2">
            <svg class="animate-spin w-4 h-4 text-black"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10"
                        stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8v8z"></path>
            </svg>
            Menghitung...
        </span>

    </button>
    </form>
</div>

<script>
// ================================================
// FORMAT HARGA MOBIL — auto titik saat mengetik
// ================================================
const inputDisplay = document.getElementById('harga_mobil_display');
const inputHidden  = document.getElementById('harga_mobil');

inputDisplay.addEventListener('input', function () {
    // Ambil angka saja, buang semua non-digit
    let raw = this.value.replace(/\D/g, '');

    // Simpan nilai asli ke hidden input (yang dikirim ke server)
    inputHidden.value = raw;

    // Format dengan titik setiap 3 digit
    this.value = raw.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
});

// Hanya izinkan angka pada input DP dan Tenor
['dp', 'tenor'].forEach(id => {
    document.getElementById(id).addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, '');
    });
});

// ================================================
// SUBMIT FORM — AJAX tanpa refresh
// ================================================
document.getElementById('form-kredit').addEventListener('submit', async function (e) {
    e.preventDefault();

    const btn     = document.getElementById('btn-submit');
    const btnText = document.getElementById('btn-text');
    const btnLoad = document.getElementById('btn-loading');

    // Bersihkan error lama
    ['harga_mobil', 'dp', 'tenor'].forEach(field => {
        const errEl = document.getElementById('error-' + field);
        const inpEl = document.getElementById(field) ?? document.getElementById('harga_mobil_display');
        errEl.textContent = '';
        errEl.classList.add('hidden');
        inpEl.classList.remove('border-red-500');
        inpEl.classList.add('border-white/10');
    });

    // Tampilkan loading
    btn.disabled = true;
    btnText.classList.add('hidden');
    btnText.classList.remove('flex');
    btnLoad.classList.remove('hidden');
    btnLoad.classList.add('flex');

    try {
        const response = await fetch('{{ route("hitung") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('[name=_token]').value,
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                harga_mobil: inputHidden.value,
                dp:          document.getElementById('dp').value,
                tenor:       document.getElementById('tenor').value,
            })
        });

        const data = await response.json();

        // Tangani error validasi dari Laravel
        if (!response.ok) {
            if (data.errors) {
                Object.keys(data.errors).forEach(field => {
                    const errEl = document.getElementById('error-' + field);
                    const inpEl = document.getElementById(field) 
                                  ?? document.getElementById('harga_mobil_display');
                    if (errEl) {
                        errEl.textContent = data.errors[field][0];
                        errEl.classList.remove('hidden');
                    }
                    if (inpEl) {
                        inpEl.classList.remove('border-white/10');
                        inpEl.classList.add('border-red-500');
                    }
                });
            }
            return;
        }

        // Berhasil — render hasil
        tampilkanHasil(data);

    } catch (err) {
        console.error('Terjadi kesalahan:', err);
        alert('Terjadi kesalahan. Silakan coba lagi.');
    } finally {
        // Kembalikan tombol normal
        btn.disabled = false;
        btnLoad.classList.add('hidden');
        btnLoad.classList.remove('flex');
        btnText.classList.remove('hidden');
        btnText.classList.add('flex');
    }
});

// ================================================
// FORMAT RUPIAH — untuk tampilan hasil
// ================================================
function rupiah(angka) {
    return new Intl.NumberFormat('id-ID').format(Math.round(angka));
}

// ================================================
// RENDER HASIL ke #hasil-kredit
// ================================================
function tampilkanHasil(data) {
    document.getElementById('hasil-kredit').innerHTML = `
        <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden">

            <div class="px-8 py-5 border-b border-white/10">
                <h3 class="text-lg font-bold text-white/70">Hasil Perhitungan</h3>
            </div>

            <div class="divide-y divide-white/10">
                <div class="flex justify-between px-8 py-4 text-sm">
                    <span class="text-white/40">Harga Mobil</span>
                    <span class="font-medium">Rp ${rupiah(data.hargaMobil)}</span>
                </div>
                <div class="flex justify-between px-8 py-4 text-sm">
                    <span class="text-white/40">DP</span>
                    <span class="font-medium">
                        ${data.dpPersen}%
                        <span class="text-white/30 ml-1">(Rp ${rupiah(data.dpNominal)})</span>
                    </span>
                </div>
                <div class="flex justify-between px-8 py-4 text-sm">
                    <span class="text-white/40">Tenor</span>
                    <span class="font-medium">
                        ${data.tenorTahun} Tahun
                        <span class="text-white/30 ml-1">(${data.tenorBulan} Bulan)</span>
                    </span>
                </div>
                <div class="flex justify-between px-8 py-4 text-sm">
                    <span class="text-white/40">Bunga</span>
                    <span class="font-medium">
                        20%
                        <span class="text-white/30 ml-1">(Rp ${rupiah(data.bunga)})</span>
                    </span>
                </div>
            </div>

            <div class="bg-[#E8FF47] px-8 py-6 flex justify-between items-center">
                <span class="font-black text-black text-base uppercase tracking-wide"
                      style="font-family:'Syne',sans-serif">
                    Jumlah Angsuran
                </span>
                <span class="font-black text-black text-2xl tracking-tight"
                      style="font-family:'Syne',sans-serif">
                    Rp ${rupiah(data.angsuran)} / Bulan
                </span>
            </div>

        </div>
    `;
}
</script>