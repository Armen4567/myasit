<?php

namespace App\Http\Controllers;

use App\Album;
use App\Albums;
use App\Comment;
use App\Models\User;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    public function index(){
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        $comments = Comment::all() ;
        $user = Auth::user() ;
        return view('user.index', [
            'posts' => $posts,
            'user' => $user ,
            'comments' => $comments
        ]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit', ['user'=>$user]);

    }
    public function update(Request $request ,$id){
        $user = User::findOrFail($id);
        $imageFileName = time() . rand(1000000, 9999999) . '.' . $request -> file('avatar')->getClientOriginalExtension();
        $s3 = Storage::disk('public');
        $s3->put('/'. $imageFileName, file_get_contents(  $request -> file('avatar')), 'public');
        $user -> update([
            'username' => $request -> input('username'),
            'full_name' => $request -> input('full_name'),
            'email' => $request -> input('email'),
            'dob' => $request -> input('dob'),
            'avatar' =>  $imageFileName,
            'password' =>  Hash::make($request -> password),

        ]);
        return redirect()->route('user');
    }
    public function albums($id){
        $user = User::findOrFail($id);
        $albums = Albums::where('user_id', $user -> id )->get();
        return view('user.albums', ['albums' => $albums, 'user' => $user]);
    }

    public function storeAlbums(Request $request){
        $album = new Albums();
        $album->name = $request->input('name');
        $album->user_id = Auth::user()->id;
        $album ->save();
        return redirect()->route('user');

    }

    public function destroyAlbum($id){
        Albums::destroy($id);
        return redirect()->route('user.albums',Auth::user()->id );
    }

    public function  userList(){
        $user = Auth::user();
        $userList  = User::all();

        return view('user.userlist', [
            'user' => $user,
            'userList' => $userList
        ]);
    }

    public function show($id){
        $comments = Comment::all() ;
        $posts = Post::where('user_id', $id )->get();
        $user  = User::findOrFail($id);
         return view('visit.visit', [
             'user' => $user ,
             'posts' => $posts,
             'comments' => $comments
         ]) ;
    }

}

