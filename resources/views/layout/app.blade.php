<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gox Energy</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Preconnect & Preload for speed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="image" href="{{ asset('assets/images/goz.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Main CSS -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/well.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trains.css') }}">
    <link rel="stylesheet" href="{{ asset('css/direct.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inspect.css') }}">
     <link rel="stylesheet" href="{{ asset('css/manpower.css') }}">
     <link rel="stylesheet" href="{{ asset('css/demo.css') }}">


</head>

<body>




    <!--header area start-->
    @include('includes.header')
    <!--header area end-->

    @yield('content')

    <!--footer area start-->
    @include('includes.footer')
    <!--footer area end-->



    <!-- ================= SCRIPTS ================= -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    if (window.AOS) {
        AOS.init({
            duration: 800,
            once: true,
            offset: 80,
            easing: "ease-out"
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        // Header scroll effect
        const header = document.querySelector('.header');
        if (header) {
            const onScroll = () => {
                if (window.scrollY > 20) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            };
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        }

        // Nav Links redirect handling
        const navLinks = document.querySelectorAll('.nav a[href^="#"]');
        navLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                const targetId = this.getAttribute("href");
                const isLandingPage = window.location.pathname === "/" 
                                      || window.location.pathname.includes("index");
                if (!isLandingPage) {
                    e.preventDefault();
                    window.location.href = "/" + targetId;
                }
            });
        });

        // Mobile Nav Hamburger & auto-close
        const hamburger = document.querySelector(".hamburger");
        const nav = document.querySelector(".nav");
        if (hamburger && nav) {
            hamburger.onclick = () => {
                hamburger.classList.toggle("active");
                nav.classList.toggle("active");
            };

            // Auto close mobile nav on clicking any link inside it
            nav.querySelectorAll('a').forEach(item => {
                item.addEventListener('click', () => {
                    hamburger.classList.remove("active");
                    nav.classList.remove("active");
                });
            });
        }

        // Scroll to top
        const scrollBtn = document.querySelector('.scroll-top');
        if (scrollBtn) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    scrollBtn.classList.remove('hidden');
                } else {
                    scrollBtn.classList.add('hidden');
                }
            });

            scrollBtn.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });

    /* ================= ULTRA-FAST LOADER ================= */
    (function () {
        const loader = document.getElementById("site-loader");
        if (!loader) return;

        let dismissed = false;
        const hideLoader = () => {
            if (dismissed) return;
            dismissed = true;
            loader.classList.add("fade-out");
            setTimeout(() => {
                loader.style.display = "none";
                if (window.AOS) {
                    AOS.refreshHard();
                }
            }, 250);
        };

        // Dismiss promptly without waiting for heavy external assets
        if (document.readyState === "interactive" || document.readyState === "complete") {
            setTimeout(hideLoader, 100);
        } else {
            document.addEventListener("DOMContentLoaded", () => {
                setTimeout(hideLoader, 150);
            });
        }

        // Hard maximum cap: never wait more than 400ms
        setTimeout(hideLoader, 400);
    })();
    </script>
</body>

</html>