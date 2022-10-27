<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <title>My Blog</title>
</head>
<body>
<div class="header">
    <div class="header_text">My Blog</div>
    <a href="login.blade.php" class="button">Login</a>
    <a class="button">Register</a>
</div>
@yield('content')
</div>
</body>
</html>

