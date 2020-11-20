<?php
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($coin, $POST['username']);
        $email = mysqli_real_escape_string($coin, $POST['email']);
        $password_1 = mysqli_real_escape_string($coin, $POST['password_1']);
        $password_2 = mysqli_real_escape_string($coin, $POST['password_2']);

        if(empty($username)) {
            array_push($error, "Username is requried");
        }
        if(empty($email)) {
            array_push($error, "Email is requried");   
        }
        if(empty($password_1)) {
            array_push($error, "Password is requried");    
        }
        if ($password_1 != $password_2){
            array_push($error,"Password do not match");
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { //ถ้ามี user อยู่ในระบบ
            if ($result['username'] === $username) {
                array_push($error, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($error, "Email already exists");
            }

        }

        if (count($error) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (usrname, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header("location : webpage.php");
        }
    }
?>