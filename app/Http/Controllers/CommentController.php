<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Comment;
use App\Models\User;
use App\Post;
use Illuminate\Http\Request;
use Auth;
class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->body = $request->input('body');
        $comment->post_id = $id;
        $comment->save();

        return redirect()->route('user');
    }
    public function show($id){
        $comments =Comment::where('post_id', 2)->get() ;
         return view('user.comments', [
                'comments' => $comments,
            ]) ;
    }

}
