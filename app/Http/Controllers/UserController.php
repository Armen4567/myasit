<?php

namespace App\Http\Controllers;

use App\Album;
use App\Albums;
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
        $user = Auth::user();
        return view('user.index', ['user'=>$user]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit', ['user'=>$user]);

    }
    public function update(Request $request ,$id){
        if($request ->hasFile('avatar'))
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
    public function albums(){
        $user = Auth::user();
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
        return redirect()->route('user.albums',Auth::user()-$id );
    }

}
