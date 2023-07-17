<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()//agar data tampil yang terbaru dan yang terakhir di masukan berada di atas
        ]);
    }
    public function show(Post $post)
    {
        return view('post',[
            "title" => "Single post",
            "post" => $post
            ]);
    }
}
