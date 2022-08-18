<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       
        return view('posts', [
            'title' => 'All Posts' ,
            'posts' => Post::with(['author', 'category'])->latest()->get()
            // 'posts' => Post::all()
        ]);
    }


    public function show(Post $post)
    {
      return view('post', [
        'title' => 'single post',
        'active' => 'posts',
        'post' => $post
      ]); 
    }
}
