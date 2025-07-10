<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Dummy blog posts data
        $posts = [
            [
                'id' => 1,
                'title' => 'The Future of Web Design in 2024',
                'slug' => 'future-of-web-design-2024',
                'excerpt' => 'Exploring the latest trends and technologies that will shape web design in the coming year.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => '/img/assets/1.png',
                'category' => 'Design',
                'published_at' => '2024-01-15',
                'author' => 'Michael D E'
            ],
            [
                'id' => 2,
                'title' => 'Building Scalable Laravel Applications',
                'slug' => 'building-scalable-laravel-applications',
                'excerpt' => 'Best practices for creating robust and scalable applications with Laravel framework.',
                'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => '/img/assets/2.png',
                'category' => 'Development',
                'published_at' => '2024-01-10',
                'author' => 'Michael D E'
            ],
            [
                'id' => 3,
                'title' => 'UI/UX Design Principles for Better User Experience',
                'slug' => 'ui-ux-design-principles',
                'excerpt' => 'Essential design principles that every designer should know to create better user experiences.',
                'content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'image' => '/img/assets/3.png',
                'category' => 'Design',
                'published_at' => '2024-01-05',
                'author' => 'Michael D E'
            ]
        ];

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        // Dummy blog post data
        $post = [
            'id' => 1,
            'title' => 'The Future of Web Design in 2024',
            'slug' => $slug,
            'excerpt' => 'Exploring the latest trends and technologies that will shape web design in the coming year.',
            'content' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                
                <h2>The Rise of AI in Design</h2>
                <p>Artificial Intelligence is revolutionizing the way we approach design. From automated layout generation to intelligent color schemes, AI tools are becoming an integral part of the design workflow.</p>
                
                <h2>Micro-interactions Matter</h2>
                <p>Small animations and interactions can significantly improve user engagement. These subtle details create a more polished and professional user experience.</p>
                
                <h2>Sustainability in Design</h2>
                <p>As environmental concerns grow, designers are increasingly focusing on creating sustainable digital experiences that minimize energy consumption and carbon footprint.</p>
            ',
            'image' => '/img/assets/1.png',
            'category' => 'Design',
            'published_at' => '2024-01-15',
            'author' => 'Michael D E'
        ];

        return view('blog.show', compact('post'));
    }
} 