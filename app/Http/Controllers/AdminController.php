<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }
    public function index(){
        $posts = Post::all();
        return view('admin.index', ['posts'=>$posts]);
    }
}
