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
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->image = $request->input('image');
        $post->body = $request->input('body');
        $post->save();
        return redirect()->route('admin');
    }
    public function edit($id){
        $post=Post::findOrFail($id);
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
//        $data = $request->all();
//         $data = $request->except(['_token','_method']);
//        $data = $request->except(['_token','_method']);
//        Post::updateOrCreate($data);
        $post-> update([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        return redirect()->route('admin');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin');
    }
}
