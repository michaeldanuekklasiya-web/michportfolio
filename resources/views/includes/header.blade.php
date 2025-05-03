<!-- Header Navigation -->
<header id="navbar" class="bg-white py-4 fixed w-full top-0 left-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-[50px] flex items-center justify-between">
        <!-- Logo -->
        <div class="flex-1">
            <a href="#" class="font-bold text-2xl text-gray-900">MDE</a>
        </div>

        <!-- Navigation Links - Desktop -->
        <nav class="hidden md:flex flex-1 justify-center space-x-8">
            <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Services</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Portfolio</a>
        </nav>
        <!-- Contact Buttons Group -->
        <div class="flex-1 hidden md:flex justify-end items-center space-x-4">
            <!-- Like Button -->
            <div class="relative">
                <button id="likeButton" class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition duration-300">
                    <svg id="likeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <span id="likeCounter" class="absolute -bottom-2 -right-1 text-xs font-medium bg-white text-gray-600 rounded-full h-5 w-5 flex items-center justify-center border border-gray-100">0</span>
            </div>

            <!-- Get in touch Button -->
            <a href="https://www.linkedin.com/in/michaeldanuekklasiya/" class="bg-black text-white px-6 py-2.5 rounded-full hover:bg-gray-800 transition duration-300">
                Get in touch
            </a>
        </div>


        <!-- Mobile Menu Button -->
        <div class="md:hidden ml-4">
            <button id="mobile-menu-button" class="text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <!-- Mobile Navigation Menu -->
<div id="mobile-menu" class="md:hidden hidden fixed inset-0 bg-white flex flex-col items-center justify-center space-y-6 z-50 opacity-0 transition-opacity duration-300">
    <!-- Close Button -->
    <button id="close-menu-button" class="absolute top-6 right-6 text-gray-700 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Navigation Links -->
    <div class="flex flex-col items-center space-y-8 mt-10">
        <a href="#" class="text-gray-700 hover:text-gray-900 text-lg font-medium">Home</a>
        <a href="#" class="text-gray-700 hover:text-gray-900 text-lg font-medium">About</a>
        <a href="#" class="text-gray-700 hover:text-gray-900 text-lg font-medium">Portfolio</a>
        <a href="#" class="text-gray-700 hover:text-gray-900 text-lg font-medium">Services</a>
        <a href="#" class="text-gray-700 hover:text-gray-900 text-lg font-medium">Project</a>

        <!-- Get in Touch Button -->
        <a href="https://www.linkedin.com/in/michaeldanuekklasiya/" class="bg-black text-white px-6 py-2.5 rounded-full text-base hover:bg-gray-800 transition duration-300 mt-6">
            Get in touch
        </a>
    </div>
</div>


</header>

<script>
     // Sticky Navbar with shadow effect on scroll
     window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 10) {
            navbar.classList.add('shadow-md');
        } else {
            navbar.classList.remove('shadow-md');
        }
    });

    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    document.getElementById('close-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            mobileMenu.classList.add('opacity-100');
            mobileMenu.classList.remove('opacity-0');
        }, 10); // Timeout sedikit supaya transition jalan
    });

    closeMenuButton.addEventListener('click', function() {
        mobileMenu.classList.add('opacity-0');
        mobileMenu.classList.remove('opacity-100');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300); // Waktu tunggu sama dengan durasi transition
    });


    document.addEventListener('DOMContentLoaded', function() {
        const likeButton = document.getElementById('likeButton');
        const likeIcon = document.getElementById('likeIcon');
        const likeCounter = document.getElementById('likeCounter');
        let isLiked = false;
        let likeCount = 0;

        // Load state from localStorage if available
        if (localStorage.getItem('isLiked') === 'true') {
            isLiked = true;
            likeCount = parseInt(localStorage.getItem('likeCount') || '0');
            updateLikeUI();
        }

        likeButton.addEventListener('click', function() {
            isLiked = !isLiked;

            if (isLiked) {
                likeCount++;
            } else {
                likeCount = Math.max(0, likeCount - 1);
            }

            // Save state to localStorage
            localStorage.setItem('isLiked', isLiked);
            localStorage.setItem('likeCount', likeCount.toString());

            updateLikeUI();
        });

        function updateLikeUI() {
            // Update the icon
            if (isLiked) {
                likeIcon.setAttribute('fill', '#ef4444');  // Red fill when liked
                likeIcon.setAttribute('stroke', '#ef4444');
            } else {
                likeIcon.setAttribute('fill', 'none');
                likeIcon.setAttribute('stroke', 'currentColor');
            }

            // Update the counter
            likeCounter.textContent = likeCount > 99 ? '99+' : likeCount.toString();

            // Make counter more visible if count > 0
            if (likeCount > 0) {
                likeCounter.classList.add('text-red-500');
            } else {
                likeCounter.classList.remove('text-red-500');
            }
        }
    });
</script>
