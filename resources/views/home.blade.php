<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPxls</title>
</head>
<body>

    @auth
    <p>Congrats, you are logged in</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginemail" type="text" placeholder="email">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>
    @endauth

</body>
</html>