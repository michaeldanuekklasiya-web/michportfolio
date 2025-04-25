<!-- Header Navigation -->
<header class="bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="font-bold text-2xl">
            <a href="#" class="text-gray-900">MDE</a>
        </div>

        <!-- Navigation Links - Desktop -->
        <nav class="hidden md:flex space-x-8">
            <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">About</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Portfolio</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Services</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Project</a>
        </nav>

        <!-- Contact Buttons Group -->
        <div class="flex items-center space-x-4">
            <div class="relative">
                <!-- Like Button -->
                <button id="likeButton" class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition duration-300">
                    <svg id="likeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>

                <!-- Like Counter -->
                <span id="likeCounter" class="absolute -bottom-2 -right-1 text-xs font-medium bg-white text-gray-600 rounded-full h-5 w-5 flex items-center justify-center border border-gray-100">0</span>
            </div>

            <!-- Bookmark Button -->
            {{-- <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-50 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>
            </button> --}}

            <!-- Get in touch Button -->
            <a href="#" class="bg-black text-white px-6 py-2.5 rounded-full hover:bg-gray-800 transition duration-300">
                Get in touch
            </a>
        </div>

        <!-- Mobile Menu Button (Hidden on desktop) -->
        <div class="md:hidden ml-4">
            <button id="mobile-menu-button" class="text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu (Hidden by default) -->
    <div id="mobile-menu" class="md:hidden hidden bg-white w-full py-2 shadow-md">
        <div class="container mx-auto px-4 flex flex-col space-y-2">
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Home</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">About</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Portfolio</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Services</a>
            <a href="#" class="block py-2 text-gray-700 hover:text-gray-900">Project</a>

            <!-- Mobile Contact Buttons -->
            <div class="flex items-center space-x-4 py-2">
                <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                {{-- <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                </button> --}}
                <a href="#" class="bg-black text-white px-6 py-2.5 rounded-full">Get in touch</a>
            </div>
        </div>
    </div>
</header>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
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
