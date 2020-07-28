@extends('main_page')

@section('content')
    @foreach($posts as $post)
        <div class="post">
            <h1><a href="{{route('showPost',$post)}}">{{$post->title}}</a></h1>
            <p>{{$post->body}}</p>
        </div>
    @endforeach
    {{$posts->links()}}
@endsection
