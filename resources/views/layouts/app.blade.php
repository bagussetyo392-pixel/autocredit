<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoCredit — Simulasi Kredit Mobil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0D0D0D;
            color: #F0F0F0;
        }

        h1, h2, h3, h4, h5, .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* ========================= */
        /* NPROGRESS */
        /* ========================= */
        #nprogress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0%;
            background: #E8FF47;
            z-index: 9999;
            transition: width 0.25s ease, opacity 0.4s ease;
            pointer-events: none;
        }

        /* ========================= */
        /* SCROLL TO TOP BUTTON */
        /* ========================= */
        #scrollTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 55px;
            height: 55px;
            background: #111;
            color: #E8FF47;
            border: none;
            border-radius: 50%;
            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;

            z-index: 9999;

            /* ANIMATION (hidden state) */
            opacity: 0;
            transform: translateY(20px) scale(0.8);
            pointer-events: none;

            transition: all 0.45s cubic-bezier(0.22, 1, 0.36, 1);
        }

        /* SHOW STATE */
        #scrollTopBtn.show {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        /* HOVER */
        #scrollTopBtn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 12px #E8FF47;
        }

        /* SVG circle */
        #scrollTopBtn svg {
            position: absolute;
            top: 0;
            left: 0;
            transform: rotate(-90deg);
        }

        #scrollTopBtn circle {
            fill: none;
            stroke-width: 6;
        }

        #scrollTopBtn .bg {
            stroke: #333;
        }

        #scrollTopBtn .progress {
            stroke: #E8FF47;
            stroke-dasharray: 283;
            stroke-dashoffset: 283;
            transition: stroke-dashoffset 0.2s linear;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <x-navbar />

    <main class="flex-1">
        @yield('content')
    </main>

    <x-footer />

    <!-- Loading bar -->
    <div id="nprogress-bar"></div>

    <!-- Scroll To Top Button -->
    <button id="scrollTopBtn">
        <svg width="55" height="55" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45" class="bg"></circle>
            <circle cx="50" cy="50" r="45" class="progress"></circle>
        </svg>
        ↑
    </button>

    <script>
        /* ========================= */
        /* NPROGRESS */
        /* ========================= */
        const bar = document.getElementById('nprogress-bar');

        function startLoading() {
            bar.style.opacity = '1';
            bar.style.width = '70%';
        }

        function finishLoading() {
            bar.style.width = '100%';
            setTimeout(() => {
                bar.style.opacity = '0';
                setTimeout(() => { bar.style.width = '0%'; }, 400);
            }, 200);
        }

        document.addEventListener('click', function (e) {
            const link = e.target.closest('a[href]');
            if (!link) return;
            const url = link.getAttribute('href');
            if (!url || url.startsWith('#') || url.startsWith('javascript')) return;
            startLoading();
        });

        window.addEventListener('load', finishLoading);

        /* ========================= */
        /* SCROLL TO TOP + PROGRESS */
        /* ========================= */
        const scrollBtn = document.getElementById('scrollTopBtn');
        const progressCircle = document.querySelector('#scrollTopBtn .progress');

        const radius = 45;
        const circumference = 2 * Math.PI * radius;

        progressCircle.style.strokeDasharray = circumference;

        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = scrollTop / docHeight;

            // progress circle
            const offset = circumference - scrollPercent * circumference;
            progressCircle.style.strokeDashoffset = offset;

            // show/hide with animation
            if (scrollTop > 200) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });

        // scroll to top
        scrollBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>