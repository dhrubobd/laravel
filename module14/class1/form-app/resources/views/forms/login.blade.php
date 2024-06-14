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
    <form enctype="multipart/form-data" action="/login-check" method="POST">
        @csrf
        <label>User Name</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <br />
        <button type="submit">Submit</button>
    </form>
    <hgroup>
        <p>Username: luke</p>
        <p>Password: 123</p>
    </hgroup>
</body>

</html>
