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
}
h2 {
  padding: 20px;
}
</style>
<body>

    <div class="header">
    <CENTER><h2><font size="6">Register</font></h2></CENTER>
    </div>

    <form action="register_db.php" method ="post">
        <?php include('errors.php'); ?>
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
				<LEFT><label for="username">Username</label>
            <BR><input type="text" name="username"></BR>
        </div>
        <div class="input-group">
				<LEFT><label for="email">E-mail</label>
            <BR><input type="email" name="email"></BR>
        </div>  
        <div class="input-group">
				<LEFT><label for="password_1">Password</label>
            <BR><input type="password" name="password_1"></BR>
        </div>
        <div class="input-group">
				<LEFT><label for="password_2">Confirm Password</label>
            <BR><input type="password" name="password_2"></BR>
        </div>  
        <div class="input-group">
				<LEFT><BR><input type="submit" name="reg_user" onclick="location.href='login.php';" value="register"class="btn btn-danger" /></BR>
        </div><BR>
				<CENTER><p>Already a member ?<a href="login.php">Sign in</a></p>              
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