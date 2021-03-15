<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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