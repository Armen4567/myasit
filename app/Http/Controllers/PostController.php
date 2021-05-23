<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function create(Request $request){
        $post = new Post();
        if($request ->has('image')) {
            $imageFileName = time() . rand(1000000, 9999999) . '.' . $request->file('image')->getClientOriginalExtension();
            $s3 = Storage::disk('public');
            $s3->put('/' . $imageFileName, file_get_contents($request->file('image')), 'public');
            $post->image = $imageFileName ;
        }
        $post->user_id = Auth::user()->id;
        $post->description = $request -> input('description');
        $post -> save();
        return redirect()->route('user');
    }
    public function destroy($id){
        Post::destroy($id);
        return redirect()->route('user');
    }

    public function getLike($id)
    {
        $post = Post::find($id);

        if ( ! $post ) redirect()->route('user');
        if ( ! Auth::user()->isFriendWith($post->user) )
        {
            return redirect()->route('user');
        }

        if ( Auth::user()->hasLikedWall($post) )
        {
            return redirect()->back();
        }

        $post->likes()->create(['user_id' => Auth::user()->id ]);

        return redirect()->back();
    }
}
