<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourFavBlog</title>
    <link href="{{URL::asset('css/main_page.css')}}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="left_header">
            <h1>YourFavBlog</h1>
        </div>
        <div class="right_header">
            <div class="header_link"><a href="{{route('posts')}}">Posts</a></div>
            <div class="header_link"><a href="{{route('addPost')}}">Add Post</a></div>
            <div class="header_link"><a href="#">Authors</a></div>
            <div class="header_link"><a href="{{route('aboutUs')}}">About us</a></div>
            <div class="header_link"><a href="#">Login</a></div>
        </div>
    </header>
    @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
    @endif
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        <div class="left_header">
            <h1>YourFavBlog</h1>
        </div>
        <div class="right_header">
            <div class="header_link"><a href="{{route('posts')}}">Posts</a></div>
            <div class="header_link"><a href="#">Authors</a></div>
            <div class="header_link"><a href="{{route('aboutUs')}}">About us</a></div>
            <div class="header_link"><a href="#">Login</a></div>
        </div>
    </footer>
</body>
</html>
