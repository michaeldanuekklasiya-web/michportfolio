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

    <main class="flex flex-col gap-8 mt-20">
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.hero')
        </section>
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.count')
        </section>
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.about')
        </section>
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.expe')
        </section>
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.sponsor')
        </section>
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.project')
        </section>
        <section class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('layouts.home.testimonials')
        </section>
    </main>

    <footer class="container mx-auto px-4 sm:px-6 lg:px-8">
        @include('includes.footer')
    </footer>

    <div>
        @include('includes.modals')
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn"
        class="hidden fixed bottom-2 right-2 sm:bottom-6 sm:right-6 bg-white text-black p-3 rounded-full shadow-lg transition-opacity opacity-0 z-50">
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

        /* Dark mode styles */
        .dark {
            color-scheme: dark;
        }

        .dark body {
            background-color: #1f2937;
            color: #f9fafb;
        }

        .dark .bg-white {
            background-color: #374151;
        }

        .dark .text-gray-900 {
            color: #f9fafb;
        }

        .dark .text-gray-600 {
            color: #d1d5db;
        }

        .dark .text-gray-700 {
            color: #e5e7eb;
        }

        .dark .bg-gray-50 {
            background-color: #111827;
        }

        .dark .bg-gray-100 {
            background-color: #374151;
        }

        /* Portfolio filter styles */
        .filter-btn.active {
            background-color: #1f2937;
            color: white;
        }

        .dark .filter-btn.active {
            background-color: #f9fafb;
            color: #1f2937;
        }

        /* Line clamp utility */
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Loading animation */
        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }
    </style>

    <script>
        // Initialize AOS
        AOS.init();

        // DOM Content Loaded
        document.addEventListener('DOMContentLoaded', function() {
            initializeScrollToTop();
            initializeParallax();
            initializeContactModal();
            initializeDarkMode();
            initializePortfolioFilters();
            initializeSkillAnimations();
            initializeCounterAnimations();
            initializeTestimonialAnimations();
        });

        // Scroll to Top Button
        function initializeScrollToTop() {
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
                    }, 300);
        }
        });

        scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        });
        }

        // Parallax Effect
        function initializeParallax() {
            const images = document.querySelectorAll(".parallax-image");
            const parallaxContainer = document.getElementById("parallaxContainer");

            if (parallaxContainer) {
            window.addEventListener("scroll", () => {
                    const scrollPosition = window.scrollY / window.innerHeight;

                images.forEach((img, index) => {
                        const speed = (index + 1) * 9;
                        const translateY = scrollPosition * -150;
                        img.style.transform = `translateY(${translateY}px)`;
                    });
                });
            }
        }

        // Contact Modal
        function initializeContactModal() {
            const contactModal = document.getElementById('contactModal');
            const contactModalBtn = document.getElementById('contactModalBtn');
            const closeContactModal = document.getElementById('closeContactModal');
            const contactForm = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const submitText = document.querySelector('.submit-text');

            // Open modal
            contactModalBtn?.addEventListener('click', () => {
                contactModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });

            // Close modal
            closeContactModal?.addEventListener('click', () => {
                contactModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
                resetForm();
            });

            // Close modal on outside click
            contactModal?.addEventListener('click', (e) => {
                if (e.target === contactModal) {
                    contactModal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                    resetForm();
                }
            });

            // Form submission
            contactForm?.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                const formData = new FormData(contactForm);
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                
                // Show loading
                submitBtn.disabled = true;
                loadingSpinner.classList.remove('hidden');
                submitText.textContent = 'Sending...';
                
                try {
                    const response = await fetch('/api/contact', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        }
                    });

                    const result = await response.json();

                    if (result.success) {
                        showSuccessMessage();
                        resetForm();
                    } else {
                        showErrors(result.errors);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    showErrors({ general: ['Something went wrong. Please try again.'] });
                } finally {
                    // Hide loading
                    submitBtn.disabled = false;
                    loadingSpinner.classList.add('hidden');
                    submitText.textContent = 'Send Message';
                }
            });

            function showSuccessMessage() {
                successMessage.classList.remove('hidden');
                setTimeout(() => {
                    successMessage.classList.add('hidden');
                }, 5000);
            }

            function showErrors(errors) {
                // Clear previous errors
                document.querySelectorAll('.error-message').forEach(el => {
                    el.classList.add('hidden');
                    el.textContent = '';
                });

                // Show new errors
                Object.keys(errors).forEach(field => {
                    const errorElement = document.querySelector(`[name="${field}"]`).nextElementSibling;
                    if (errorElement) {
                        errorElement.textContent = errors[field][0];
                        errorElement.classList.remove('hidden');
                    }
                });
            }

            function resetForm() {
                contactForm.reset();
                document.querySelectorAll('.error-message').forEach(el => {
                    el.classList.add('hidden');
                });
                successMessage.classList.add('hidden');
            }
        }

        // Dark Mode Toggle
        function initializeDarkMode() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const sunIcon = document.getElementById('sunIcon');
            const moonIcon = document.getElementById('moonIcon');
            
            // Check for saved theme preference or default to light mode
            const currentTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.classList.toggle('dark', currentTheme === 'dark');
            updateIcon(currentTheme === 'dark');

            darkModeToggle?.addEventListener('click', () => {
                const isDark = document.documentElement.classList.toggle('dark');
                localStorage.setItem('theme', isDark ? 'dark' : 'light');
                updateIcon(isDark);
            });

            function updateIcon(isDark) {
                if (isDark) {
                    sunIcon.classList.add('hidden');
                    moonIcon.classList.remove('hidden');
                } else {
                    sunIcon.classList.remove('hidden');
                    moonIcon.classList.add('hidden');
                }
            }
        }

        // Portfolio Filters
        function initializePortfolioFilters() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const filter = btn.getAttribute('data-filter');
                    
                    // Update active button
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    // Filter projects
                    projectCards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        
                        if (filter === 'all' || category === filter) {
                            card.style.display = 'block';
                            card.style.animation = 'fadeIn 0.5s ease-in-out';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }

        // Skill Progress Animations
        function initializeSkillAnimations() {
            const skillProgress = document.querySelectorAll('.skill-progress');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressBar = entry.target;
                        const width = progressBar.getAttribute('data-width');
                        progressBar.style.width = '0%';
                        
                        setTimeout(() => {
                            progressBar.style.transition = 'width 1.5s ease-in-out';
                            progressBar.style.width = width + '%';
                        }, 200);
                        
                        observer.unobserve(progressBar);
                    }
                });
            });

            skillProgress.forEach(bar => observer.observe(bar));
        }

        // Counter Animations
        function initializeCounterAnimations() {
            const counters = document.querySelectorAll('[data-count]');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-count'));
                        const duration = 2000; // 2 seconds
                        const increment = target / (duration / 16); // 60fps
                        let current = 0;

                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            counter.textContent = Math.floor(current);
                        }, 16);

                        observer.unobserve(counter);
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));
        }

        // Testimonial Animations
        function initializeTestimonialAnimations() {
            const testimonialCards = document.querySelectorAll('.testimonial-card');
            
            testimonialCards.forEach((card, index) => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
            });
        });
        }

        // Add fadeIn animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>

