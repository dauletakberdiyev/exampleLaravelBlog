<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\InsertDB;

class PostController extends Controller
{
    /*public function index(){
        return view('main.posts');
    }*/

    public function posts(){
        $posts = Post::paginate(4);
        return view('main.posts', compact('posts'));
    }

    public function store(Request $request){
        $post = new InsertDB;
        $data = $request->input();
        $post->title = $data['postTitle'];
        $post->body = $data['postText'];
        $post->save();
        return redirect('/');
    }

    public function addPost(){
        return view('addPost.add_post');
    }
}
