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
        $user = Auth::user();
        $album_id = $id ;
        $images = Images::where('album_id', $id)->get();
//        $albums = Albums::all();
        return view('user.image', [
            'album_id' => $album_id,
            'images' => $images,
            'user' => $user
        ]);
    }
     public function store(Request $request, $id){
         $image = new Images();

//         if($request ->hasFile('image'))
//             $user = User::findOrFail($id);z
         $imageFileName = time() . rand(1000000, 9999999) . '.' .$request -> file('image')->getClientOriginalExtension();
         $s3 = Storage::disk('public');
         $s3->put('/'. $imageFileName, file_get_contents(  $request -> file('image')), 'public');

         $image->name = $imageFileName;
         $image->user_id = Auth::user()->id;
         $image->album_id = $id;
         $image ->save();
         return redirect()->route('user.show.albums',$id );
     }
     public function destroy($id){
        Images::destroy($id) ;
         return redirect()->route('user.albums', Auth::user()->id);

     }
}
