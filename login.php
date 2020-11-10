<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewpot" content="width=device-width, inital-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="header">
    <h2>Login</h2>
    </div>

    <form action="register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <BR><input type="text" name="username"></BR>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <BR><input type="password" name="password"></BR>
        </div>
        <div class="input-group">
            <BR><button type="submit" name="login_user" class="btn">Login</button></BR>
        </div>
            <p>Not yet a member?<a href="login.php">Sign up</a></p>             
    </form>

</body>
</html>