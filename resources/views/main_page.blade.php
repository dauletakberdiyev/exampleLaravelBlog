<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourFavBlog</title>
    <link href="css/main_page.css" rel="stylesheet"/>
</head>
<body>
    <header class="header">
        <div class="left_header">
            <h1>YourFavBlog</h1>
        </div>
        <div class="right_header">
            <div class="header_link"><a href="#">Posts</a></div>
            <div class="header_link"><a href="#">Authors</a></div>
            <div class="header_link"><a href="#">About us</a></div>
            <div class="header_link"><a href="#">Login</a></div>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <div class="container">
        @include('main.add_post')
    </div>
    <footer class="footer">
        <div class="left_header">
            <h1>YourFavBlog</h1>
        </div>
        <div class="right_header">
            <div class="header_link"><a href="#">Posts</a></div>
            <div class="header_link"><a href="#">Authors</a></div>
            <div class="header_link"><a href="#">About us</a></div>
            <div class="header_link"><a href="#">Login</a></div>
        </div>
    </footer>
</body>
</html>
