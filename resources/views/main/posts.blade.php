@extends('main_page')

@section('content')
    @foreach($posts as $post)
        <div class="post">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
        </div>
    @endforeach
    {{$posts->links()}}
@endsection
