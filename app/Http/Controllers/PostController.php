<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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
        return redirect()->action('PostController@posts');
    }

    public function addPost(){
        return view('addPost.add_post');
    }

    public function showPost($id){
        $post = Post::find($id);
        return view('main.concretePost', compact('post'));
    }

    public function deletePost($id){
        Post::deleteData($id);
        Session::flash('message','Delete successfully.');
        return redirect()->action('PostController@posts');
    }

    public function editPost($id){
        $post = Post::find($id);
        return view('editPost.editPost',compact('post'));
    }

    public function changePost(Request $request){
        $title = $request->input('postTitle');
        $body = $request->input('postText');
        $id = $request->input('id');
        if($title != '' && $body != ''){
            $data = array('title' => $title, 'body' => $body);
            Post::updateData($id,$data);
        }
        return redirect()->action('PostController@posts');
    }
}
