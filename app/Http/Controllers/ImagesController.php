<?php

namespace App\Http\Controllers;
use App\Albums;
use App\Images ;
use App\Models\User;
use Illuminate\Http\Request;
use Auth ;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function  index($id){
            $album_id = $id ;
        $images = Images::where('album_id', $id)->get();
        $album_author = Albums::where('id', $album_id)->get();
        $user_id = $album_author[0]-> user_id ;
        $user = User::findOrFail($user_id);
        return view('user.image', [
            'album_id' => $album_id,
            'images' => $images,
            'user' => $user ,
            'album_author' => $album_author[0]
        ]);
    }
     public function store(Request $request, $id)
     {
         request()->validate([
             'image' => 'required|image|mimes:jpeg,png,jpg',
         ]);
         $image = new Images();

         if ($request->has('image')){
             $imageFileName = time() . rand(1000000, 9999999) . '.' . $request->file('image')->getClientOriginalExtension();
             $s3 = Storage::disk('public');
             $s3->put('/' . $imageFileName, file_get_contents($request->file('image')), 'public');
             $image->name = $imageFileName;
         }
         $image->user_id = Auth::user()->id;
         $image->album_id = $id;
         $image ->save();
         return redirect()->route('user.show.albums',$id );
     }
     public function destroy($id){
        Images::destroy($id) ;
         return redirect()->route('user.show.albums', Auth::user()->id);
     }
}
