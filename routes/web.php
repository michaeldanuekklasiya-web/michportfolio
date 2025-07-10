<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Models\SiteLike;
use App\Models\SiteLikeDevice;

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

// Like Counter API
Route::get('/like-count', function () {
    $like = SiteLike::first();
    if (!$like) {
        $like = SiteLike::create(['count' => 0]);
    }
    return response()->json(['count' => $like->count]);
});

Route::post('/like-count', function () {
    $like = SiteLike::first();
    if (!$like) {
        $like = SiteLike::create(['count' => 1]);
    } else {
        $like->increment('count');
    }
    return response()->json(['count' => $like->count]);
});

// Reset (testing only)
Route::post('/like-reset', function () {
    if (app()->environment('production')) abort(403);
    $like = SiteLike::first();
    if ($like) {
        $like->count = 0;
        $like->save();
    }
    return response()->json(['count' => $like ? $like->count : 0]);
});

// Like status by device
Route::get('/like-status', function (\Illuminate\Http\Request $request) {
    $deviceId = $request->query('device_id');
    $liked = SiteLikeDevice::where('device_id', $deviceId)->exists();
    return response()->json(['liked' => $liked]);
});

// Toggle like/unlike
Route::post('/like-toggle', function (\Illuminate\Http\Request $request) {
    $deviceId = $request->input('device_id');
    $like = SiteLike::first();
    if (!$like) {
        $like = SiteLike::create(['count' => 0]);
    }
    $device = SiteLikeDevice::where('device_id', $deviceId)->first();
    if ($device) {
        // Unlike
        $device->delete();
        $like->count = max(0, $like->count - 1);
        $like->save();
        return response()->json(['liked' => false, 'count' => $like->count]);
    } else {
        // Like
        SiteLikeDevice::create(['device_id' => $deviceId]);
        $like->increment('count');
        return response()->json(['liked' => true, 'count' => $like->count]);
    }
});
