<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
</head>
<body>
    <header>
        <nav> 
            <a href="/blog/blog">blog</a>
            <a href="/blog/profile/2">profile</a>
        </nav>
    </header>
    @yield('content')
    <footer>
</footer>
</body>
</html>