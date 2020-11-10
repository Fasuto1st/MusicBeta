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
    <CENTER><h2><font size="6">Login</font></h2></CENTER>
    </div>

    <form action="register_db.php">
        <div class="input-group">
            <CENTER><label for="username"><font size="4">Username</font></label>
            <BR><input type="text" name="username"></BR>
        </div>
        <div class="input-group">
            <CENTER><label for="password"><font size="4">Password</font></label>
            <BR><input type="password" name="password"></BR>
        </div>
        <div class="input-group">
            <CENTER><BR><button type="submit" name="login_user" class="btn"><font size="4">Login</font></button></BR>
        </div>
            <CENTER><p>Not yet a member?<a href="login.php">Sign up</a></p></CENTER>               
    </form>

</body>
</html>