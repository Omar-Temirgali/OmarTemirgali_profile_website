<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/post/create', function() {
    DB::table('post')->insert([
        'title' => 'Swift',
        'body' => 'Swift is a powerful and intuitive programming language for macOS, iOS, 
        watchOS, tvOS and beyond. Writing Swift code is interactive and fun, the syntax is 
        concise yet expressive, and Swift includes modern features developers love. 
        Swift code is safe by design, yet also produces software that runs lightning-fast.'
    ]);
});

Route::get('/post', function() {
    $post = Post::find(1);
    return $post;
});

Route::get('/blog/index', [BlogController::class, 'index']);

Route::get('/blog/create', function() {
    return view('blog.create');
});

Route::post('/blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('/post/{title}', [BlogController::class, 'getTitle']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'add'])->name('addprofile');

Route::get('/profile/{profile_id}', [ProfileController::class, 'showProfile']);

Route::get('/profiles', [ProfileController::class, 'showProfiles']);

Route::get('/mail/send', [MailController::class, 'send']);
