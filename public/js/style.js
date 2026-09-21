document.addEventListener("DOMContentLoaded", function () {

    /* ================= SCROLL TOP ================= */
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


    /* ================= MOBILE NAV ================= */
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".nav");

    if (hamburger && nav) {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            nav.classList.toggle("active");
        });
    }


    /* ================= SMOOTH SCROLL ================= */
    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', function (e) {

            const targetId = this.getAttribute('href');

            // Prevent errors for external links
            if (targetId.startsWith("#")) {

                e.preventDefault();

                const target = document.querySelector(targetId);

                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }

                if (nav && nav.classList.contains('active')) {
                    nav.classList.remove('active');
                    hamburger.classList.remove('active');
                }
            }
        });
    });


    /* ================= AOS ================= */
    if (window.AOS) {
        AOS.init({
            duration: 900,
            once: true
        });
    }

});


/* ================= LOADER ================= */
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
