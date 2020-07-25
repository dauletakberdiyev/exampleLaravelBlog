<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /*public function index(){
        return view('main.posts');
    }*/

    public function posts(){
        $posts = Post::paginate(4);
        return view('main.posts', compact('posts'));
    }
}
