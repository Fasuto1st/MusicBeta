<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewpot" content="width=device-width, inital-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="css/login.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@500&display=swap" rel="stylesheet">

</head>
<style>

body,
html {
   font-family: 'Mitr', sans-serif;
    width: 100%;
    height: 70%;
    margin: 0;
    padding: 0;
    display: table;
}

body {
    display: table-cell;
    vertical-align: middle;
}

form,
h1 {
    color: #fff;
    display: table;
    margin: auto;
    width: 100px;
    padding: 20px;
}

</style>
<body>
<CENTER><h2>Welcome to MUSIC BETA</h2><BR>

    <div class="header">
    <CENTER><h2><font size="6">Login</font></h2></CENTER>
    </div>

    <form action="login_db.php" method ="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <CENTER><label for="username"><font size="4">Username</font></label>
            <BR><input type="text" name="username"></BR>
        </div>
        <div class="input-group">
            <CENTER><label for="password"><font size="4">Password</font></label>
            <BR><input type="password" name="password"></BR>
        </div>
        <div class="input-group">
            <LEFT><BR><input type="submit" name="login_user" onclick="location.href='webpage2.php';" value="login"class="btn btn-danger"> 
        </div><BR>
            <CENTER><p>Not yet a member?<a href="register.php">Sign up</a></p></CENTER>               
    </form>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>
</html>