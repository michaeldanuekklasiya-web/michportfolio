<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../img/fav.png" rel="shortcut icon">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <title>michaeldanuekklasiya</title>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">
        <div>
            @include('includes.header')
        </div>

        <div>
            @include('layouts.home.hero')
        </div>

        <div>
            @include('layouts.home.count')
        </div>

        {{-- <div>
            @include('layouts.home.about')
        </div> --}}

        <div>
            @include('layouts.home.expe')
        </div>

        <div>
            @include('layouts.home.sponsor')
        </div>

        <div>
            @include('layouts.home.project')
        </div>




        <div>
            @include('includes.footer')
        </div>
     <!-- Scroll to Top Button -->
  <button id="scrollToTopBtn"
  class="hidden fixed bottom-6 right-6 bg-white text-black p-3 rounded-full shadow-lg transition-opacity opacity-0">
  ↑
</button>
    <style>
        /* Floating animation using CSS */
        .floating-image {
            animation: float 3s ease-in-out infinite alternate;
        }

        @keyframes float {
            0% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(10px);
            }
        }
    </style>

    <script>
        AOS.init();

        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.remove("hidden");
            scrollToTopBtn.classList.add("opacity-100");
            scrollToTopBtn.classList.remove("opacity-0");
        } else {
            scrollToTopBtn.classList.add("opacity-0");
            setTimeout(() => {
            if (window.scrollY < 300) {
                scrollToTopBtn.classList.add("hidden");
            }
            }, 300); // Delay supaya animasi opacity jalan dulu baru hidden
        }
        });

        scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        });

        document.addEventListener("DOMContentLoaded", () => {
            const images = document.querySelectorAll(".parallax-image");
            const parallaxContainer = document.getElementById("parallaxContainer");

            window.addEventListener("scroll", () => {
                const scrollPosition = window.scrollY / window.innerHeight; // Normalized scroll position (0 to 1)

                images.forEach((img, index) => {
                    const speed = (index + 1) * 9; // Vary the speed for each image
                    const translateY = scrollPosition * -150; // Calculate translateY value

                    // Apply translateY transformation to each image
                    img.style.transform = `translateY(${translateY}px)`;
                });
            });
        });
    </script>
</body>
</html>

