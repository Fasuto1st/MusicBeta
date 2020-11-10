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
    <CENTER><h2><font size="6">Register</font></h2></CENTER>
    </div>

    <form action="register_db.php">
        <div class="input-group">
            <label for="username">Username</label>
            <BR><input type="text" name="username"></BR>
        </div>
        <div class="input-group">
            <label for="email">E-mail</label>
            <BR><input type="email" name="email"></BR>
        </div>  
        <div class="input-group">
            <label for="password_1">Password</label>
            <BR><input type="password" name="password_1"></BR>
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <BR><input type="password" name="password_2"></BR>
        </div>  
        <div class="input-group">
            <BR><button type="submit" name="reg_user" class="btn">Register</button></BR>
        </div>
            <p>Already a member ?<a href="login.php">Sign in</a></p>              
    </form>

</body>
</html>