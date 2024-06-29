<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <hgroup>
        <h1>Login Form</h1>
        <p>Login To Your Account</p>
    </hgroup>

    <form class="flash default" enctype="multipart/form-data" action="/profile" method="POST">
        @csrf
        <fieldset class="accent">
        <label>User Name</label>
        <input class="flash default" type="text" name="username" placeholder="Your Username">
        <label>Password</label>
        <input class="flash default" type="password" name="password"  placeholder="Your password">
        <br />
        <button class="flash default" type="submit">Submit</button>
        <p class="danger">{{session('error')}}</p>
        </fieldset>
    </form>

    <hgroup>
        <p>Username: luke</p>
        <p>Password: 123</p>
    </hgroup>
</body>

</html>
