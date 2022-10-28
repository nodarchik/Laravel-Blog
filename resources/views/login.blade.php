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
    <a href="/" class="button">Back</a>
    <a href="/register" class="button">Register</a>
</div>
<div class="login_page">
    <form class="login_form">
        <input class="login_user" type="text" id="user" name="user" placeholder="Your User Name.."></input>
        <input type="text" id="password" name="password" placeholder="Your Password.."></input>
        <button type="submit">Log In</button>
    </form>
</div>
</body>
</html>
