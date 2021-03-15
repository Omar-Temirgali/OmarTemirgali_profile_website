<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('blog.index')->with(['posts' => $posts]);
    }

    public function store(Request $request) {
        Post::create([
            'title' => $request->title,
            'body' => $request->post
        ]);
        
        return back();
    }

    public function getTitle($title) {
        $post = Post::where('title', $title)->first();

        if($post == null) {
            return response('Post with such title does not exist', 404);
        }

        return view('blog.post')->with(['post'=>$post]);
    }
}
