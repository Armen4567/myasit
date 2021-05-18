<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }
    public function index(){
        $posts = Post::all();
        $count = Post::all()->count();
        return view('admin.home.index', [
            'posts'=>$posts ,
            'count' => $count
        ]);
    }
    public  function posts(){
        $posts = Post::all();
        return view('admin.home.posts', [
            'posts' => $posts ,
        ]);
    }

    public  function categories(){
        $categories = Category::all();
        return view('admin.home.category', [
            'categories' => $categories ,
        ]);
    }
    public  function storeCategory(Request $request){
//        $validate = $request -> validate([
//           'title' => 'required|min:4',
//           'description' => 'required|min:10',
//           'category_id' => 'required',
//           'image' => 'required',
//        ]);

        $data = $request->all();
        $post = Category::Create($data);
        $post->image = $request->file('image')->storeAs(
            'posts', $post->id.$request->file('image')->getClientOriginalName()
        );
        $post->save();
        return redirect()->route('post-table');
    }

    public function create(){
        return view('admin.home.create');
    }

    public  function store(Request $request){
//        $validate = $request -> validate([
//           'title' => 'required|min:4',
//           'description' => 'required|min:10',
//           'category_id' => 'required',
//           'image' => 'required',
//        ]);

        $data = $request->all();
        $post = Post::Create($data);
        $post->image = $request->file('image')->storeAs(
            'posts', $post->id.$request->file('image')->getClientOriginalName()
        );
        $post->save();
        return redirect()->route('post-table');
    }

    public function edit($id){
        $post= Post::findOrFail($id);
        return view('admin.home.edit',['post'=>$post]);
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $post -> update([
            'title' => $request -> input('title'),
            'body' => $request -> input('description'),
        ]);
        return redirect()->route('post-table');
    }
    public function destroy($id){
        Post::destroy($id);
        return redirect()->route('post-table');
    }
}
