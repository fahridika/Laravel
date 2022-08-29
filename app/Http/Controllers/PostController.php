<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        // @dd(request('search'));

        $posts = Post::latest();
        if(Request('search')){
            $posts->where('title', 'like', '%'. request('search') . "%")
        ->orWhere('body', 'like' , '%'. request('search') . "%");
        }

        return view('posts', [
            'title'=> 'All Posts',
            'active'=> 'posts',
            // 'posts' => Post::all()
            'posts' => $posts->get()
            // eager loading
        ]);
    }


    public function show(Post $post)
    {
        //
        return view ('post', [
            'title' => 'single post',
            'active'=> 'posts',
            'post' => $post
            // 'post' => Post::find($post)
        ]);
    }
}
