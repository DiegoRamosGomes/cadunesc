<?php


namespace App\Http\Controllers;


use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->paginate(5);
        return view('posts.index')->with([
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post
        ]);
    }
}
