<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('index');
});

// Contact form routes
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// API routes for AJAX
Route::post('/api/contact', [ContactController::class, 'storeAjax'])->name('api.contact.store');
