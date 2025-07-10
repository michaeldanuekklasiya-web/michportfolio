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
    <title>Blog - Michael D E</title>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <a href="/" class="text-2xl font-bold text-gray-900">Michael D E</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-600 hover:text-gray-900 transition-colors">Home</a>
                    <a href="/blog" class="text-gray-900 font-medium">Blog</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900 transition-colors">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Blog</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Insights, tips, and thoughts on design, development, and digital innovation.
            </p>
        </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                <article class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $post['category'] }}</span>
                            <span class="text-gray-500 text-sm ml-3">{{ \Carbon\Carbon::parse($post['published_at'])->format('M d, Y') }}</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition-colors">
                            <a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a>
                        </h2>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ $post['excerpt'] }}
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="{{ asset('img/mich.png') }}" alt="Author" class="w-8 h-8 rounded-full mr-3">
                                <span class="text-sm text-gray-600">{{ $post['author'] }}</span>
                            </div>
                            <a href="{{ route('blog.show', $post['slug']) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Read More →
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Michael D E. All rights reserved.</p>
        </div>
    </footer>

    <style>
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <script>
        AOS.init();
    </script>
</body>
</html> 