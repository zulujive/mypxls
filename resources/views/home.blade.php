
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPxls</title>
    <style>
        body {
            background-color: #232323;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        .post {
            background-color: #ff2d20;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
        .title {
            margin-left: 1rem;
        }
        .postCreate {
            margin-bottom: 1rem;
            margin-left: 1rem;
        }
        .primaryContainer {
            margin-bottom: 1rem;
            border: 3px solid #ff2d20;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    @auth
    <form action="/logout" method="POST">
        @csrf
        <button style="margin-bottom: 1rem; float: right;">Logout</button>
    </form>

    <div class="primaryContainer">
        <h2 class="title">Create a New Post</h2>
        <form class="postCreate" action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="post title"><br>
            <textarea name="body" placeholder="body content..."></textarea><br>
            <button>Save Post</button>
        </form>
    </div>

    <div class="primaryContainer">
        <h2 class="title">Your Posts</h2>
        @foreach($posts as $post)
        <div class="post">
            <h3>{{$post['title']}} by {{$post->user->name}}</h3>
            {{$post['body']}}
            <div style="display:flex; align-content:center; margin-top: 10px;">
                <p style="margin-right:5px;margin-top:0;"><a style="color: white; align-content: bottom;" href="/edit-post/{{$post->id}}">Edit</a></p>
                <form action="/delete-post/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button style="align-content: center; justify-content: center;">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="primaryContainer">
        <h2 class="title">All Posts</h2>
        @foreach($allPosts as $post)
        <div class="post">
            <h3>{{$post['title']}} by {{$post->user->name}}</h3>
            {{$post['body']}}
        </div>
        @endforeach
    </div>


    <!-- FOR LOGGED OUT USERS -->
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