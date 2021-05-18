<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts'=>$posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.single', ['post' => $post]);
    }
}
