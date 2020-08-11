@extends('main_page')

@section('content')
    <form method="post" action="{{URL::to('/changePost')}}">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value="{{$post->id}}">
        <div class="input_div">
            <div class="input">
                <input type="text" name="postTitle" value="{{$post->title}}">
                <textarea name="postText" rows="10" cols="45">{{$post->body}}</textarea>
            </div>
            <div class="input_btn">
                <input type="submit" value="Update">
            </div>
        </div>
        <a href="{{route('showPost',$post)}}">Back</a>
    </form>
@endsection
