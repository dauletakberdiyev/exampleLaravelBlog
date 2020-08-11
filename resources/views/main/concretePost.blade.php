@extends('main_page')

@section('content')
    <div class="post">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <a href="{{route('deletePost',$post)}}">Delete</a>
        <a href="{{route('editPost',$post)}}">Edit</a>
        <a href="{{route('posts')}}">Back</a>
    </div>
@endsection
