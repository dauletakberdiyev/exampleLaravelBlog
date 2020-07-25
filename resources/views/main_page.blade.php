<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourFavBlog</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body, html{
            position: relative;
            min-height: 100vh;
            height: 100%;
        }
        .header{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #c5c5c5;
        }
        .right_header{
            display: flex;
            align-items: center;
        }
        .header_link{
            margin-right: 10px;
        }
        .container{
            width: 1200px;
            margin: 0 auto;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: space-between;
            background-color: #c5c5c5;
        }
        .left_header{
            display: flex;
            align-items: center;
        }
        .post{
            margin-bottom: 20px;
        }
    </style>
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
