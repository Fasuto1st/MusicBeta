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
            <CENTER><label for="username"><font size="4">Username</font></label>
            <BR><input type="text" name="username"></BR>
        </div>
        <div class="input-group">
            <CENTER><label for="email"><font size="4">E-mail</font></label>
            <BR><input type="email" name="email"></BR>
        </div>  
        <div class="input-group">
            <CENTER><label for="password_1"><font size="4">Password</font></label>
            <BR><input type="password" name="password_1"></BR>
        </div>
        <div class="input-group">
            <CENTER><label for="password_2"><font size="4">Confirm Password</font></label>
            <BR><input type="password" name="password_2"></BR>
        </div>  
        <div class="input-group">
            <CENTER><BR><button type="submit" name="reg_user" class="btn"><font size="4">Register</font></button></BR>
        </div>
            <CENTER><p>Already a member ?<a href="login.php">Sign in</a></p></CENTER>               
    </form>

</body>
</html>