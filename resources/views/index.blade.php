<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../img/logo2.png" rel="shortcut icon">

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
        @include('layouts.home.expe')
    </div>

    <div>
        @include('layouts.home.porto')
    </div>


    <div>
        @include('includes.footer')
    </div>

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

