<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    public function index(){
        $posts = Post::all();
        return view('user.index', ['posts'=>$posts]);
    }
}
