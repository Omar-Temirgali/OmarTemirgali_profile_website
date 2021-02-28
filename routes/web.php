<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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
        'title' => 'PHP is ugly',
        'body' => 'Many people believe that PHPs best days are over. 
        The programming language created by Lerdorf fell out of the developers 
        favor a few years ago and has become an ugly duckling in the software industry. 
        Why? "PHP was designed very poorly from the outset and it has never been really fast.'
    ]);
});

Route::get('/post', function() {
    $post = Post::find(1);
    return $post;
});
