<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../img/fav.png" rel="shortcut icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>{{ $post['title'] }} - Michael D E</title>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-2xl font-bold text-gray-900">Michael D E</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-600 hover:text-gray-900 transition-colors">Home</a>
                    <a href="/blog" class="text-gray-600 hover:text-gray-900 transition-colors">Blog</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900 transition-colors">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Article -->
    <article class="py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="/" class="hover:text-gray-700">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="/blog" class="hover:text-gray-700">Blog</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-gray-900">{{ $post['title'] }}</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <div class="flex items-center mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $post['category'] }}</span>
                    <span class="text-gray-500 text-sm ml-3">{{ \Carbon\Carbon::parse($post['published_at'])->format('M d, Y') }}</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $post['title'] }}</h1>
                <p class="text-xl text-gray-600 mb-6">{{ $post['excerpt'] }}</p>
                <div class="flex items-center">
                    <img src="{{ asset('img/mich.png') }}" alt="Author" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <p class="font-medium text-gray-900">{{ $post['author'] }}</p>
                        <p class="text-sm text-gray-500">Product Designer & Developer</p>
                    </div>
                </div>
            </header>

            <!-- Featured Image -->
            <div class="mb-8">
                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-64 md:h-96 object-cover rounded-lg">
            </div>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                {!! $post['content'] !!}
            </div>

            <!-- Share Buttons -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this article</h3>
                <div class="flex space-x-4">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post['title']) }}" 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                        Share on Twitter
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" 
                       target="_blank" 
                       class="flex items-center px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-800 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        Share on LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Related Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Related Article 1 -->
                <article class="bg-gray-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('img/assets/2.png') }}" alt="Related Article" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Building Scalable Laravel Applications</h3>
                        <p class="text-gray-600 text-sm mb-4">Best practices for creating robust and scalable applications with Laravel framework.</p>
                        <a href="/blog/building-scalable-laravel-applications" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Read More →
                        </a>
                    </div>
                </article>

                <!-- Related Article 2 -->
                <article class="bg-gray-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('img/assets/3.png') }}" alt="Related Article" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">UI/UX Design Principles</h3>
                        <p class="text-gray-600 text-sm mb-4">Essential design principles that every designer should know to create better user experiences.</p>
                        <a href="/blog/ui-ux-design-principles" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Read More →
                        </a>
                    </div>
                </article>

                <!-- Related Article 3 -->
                <article class="bg-gray-50 rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('img/assets/1.png') }}" alt="Related Article" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">The Future of Web Design</h3>
                        <p class="text-gray-600 text-sm mb-4">Exploring the latest trends and technologies that will shape web design in the coming year.</p>
                        <a href="/blog/future-of-web-design-2024" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Read More →
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Michael D E. All rights reserved.</p>
        </div>
    </footer>

    <script>
        AOS.init();
    </script>
</body>
</html> 