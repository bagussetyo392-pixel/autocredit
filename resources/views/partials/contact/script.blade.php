{{-- contact/partials/_scripts.blade.php --}}

<script>
document.addEventListener("DOMContentLoaded", function () {

    /* ============================================================
       TOAST
    ============================================================ */
    function showToast(type, msg) {
        const toast     = document.getElementById('toast');
        const toastMsg  = document.getElementById('toastMsg');
        const toastIcon = document.getElementById('toastIcon');

        // reset class warna
        toast.classList.remove(
            'bg-[#0f1f0b]', 'border-green-500/30', 'text-green-400',
            'bg-[#1f0b0b]', 'border-red-500/30', 'text-red-400'
        );

        if (type === 'success') {
            toast.classList.add('bg-[#0f1f0b]', 'border', 'border-green-500/30', 'text-green-400');
            toastIcon.textContent = '✓';
        } else {
            toast.classList.add('bg-[#1f0b0b]', 'border', 'border-red-500/30', 'text-red-400');
            toastIcon.textContent = '✕';
        }

        toastMsg.textContent = msg;

        toast.classList.remove('hidden');
        toast.classList.add('flex');

        requestAnimationFrame(() => {
            toast.classList.remove('opacity-0', '-translate-y-2');
            toast.classList.add('opacity-100', 'translate-y-0');
        });

        clearTimeout(toast._timer);
        toast._timer = setTimeout(() => {
            toast.classList.remove('opacity-100', 'translate-y-0');
            toast.classList.add('opacity-0', '-translate-y-2');
            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 300);
        }, 4000);
    }


    /* ============================================================
       VALIDASI
    ============================================================ */
    function validateForm(form) {
        let valid = true;

        form.querySelectorAll('.field-error').forEach(el => {
            el.textContent = '';
            el.classList.add('hidden');
        });

        form.querySelectorAll('.input-field').forEach(el => {
            el.classList.remove('border-red-500/50');
        });

        function setError(id, msg) {
            const input = form.querySelector('#' + id);
            const err   = input?.nextElementSibling;

            if (input) input.classList.add('border-red-500/50');
            if (err) {
                err.textContent = msg;
                err.classList.remove('hidden');
            }

            valid = false;
        }

        const nama  = form.querySelector('#nama')?.value.trim();
        const email = form.querySelector('#email')?.value.trim();
        const pesan = form.querySelector('#pesan')?.value.trim();

        if (!nama || nama.length < 3)
            setError('nama', 'Nama minimal 3 karakter.');

        if (!email)
            setError('email', 'Email wajib diisi.');
        else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))
            setError('email', 'Format email tidak valid.');

        if (!pesan || pesan.length < 10)
            setError('pesan', 'Detail minimal 10 karakter.');

        return valid;
    }


    /* ============================================================
       FORM AJAX
    ============================================================ */
    const form = document.getElementById('contactForm');

    if (form) {
        const btn     = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const btnSpin = document.getElementById('btnSpinner');

        function setLoading(state) {
            btn.disabled = state;
            btnText.textContent = state ? 'Mengirim...' : 'Kirim Pertanyaan';
            btnSpin.classList.toggle('hidden', !state);
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (!validateForm(form)) return;

            setLoading(true);

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': formData.get('_token'),
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(async res => {
                const data = await res.json();

                if (!res.ok) {
                    if (res.status === 422 && data.errors) {
                        Object.entries(data.errors).forEach(([key, msgs]) => {
                            const input = form.querySelector('#' + key);
                            const err   = input?.nextElementSibling;

                            if (input) input.classList.add('border-red-500/50');
                            if (err) {
                                err.textContent = msgs[0];
                                err.classList.remove('hidden');
                            }
                        });
                    }

                    throw new Error(data.message || 'Terjadi kesalahan.');
                }

                return data;
            })
            .then(data => {
                showToast('success', data.message || 'Pesan berhasil dikirim!');
                form.reset();
            })
            .catch(err => {
                showToast('error', err.message || 'Gagal mengirim.');
            })
            .finally(() => {
                setLoading(false);
            });
        });
    }


    /* ============================================================
       FAQ SMOOTH ACCORDION
    ============================================================ */
    const items = document.querySelectorAll('.faq-item');

    items.forEach(item => {
        const btn = item.querySelector('.faq-btn');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        btn.addEventListener('click', () => {

            const isOpen = content.style.maxHeight;

            // tutup semua
            items.forEach(i => {
                i.querySelector('.faq-content').style.maxHeight = null;
                i.querySelector('.faq-icon').classList.remove('rotate-180');
            });

            // buka
            if (!isOpen) {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.classList.add('rotate-180');
            }

        });
    });

});
</script>