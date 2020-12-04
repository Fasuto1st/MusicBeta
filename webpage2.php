<?php
include 'item.php'; 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <title>Music Player</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="js/player.js">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'  rel='stylesheet' type='text/css'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@500&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="css/webpage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    font-family: 'Mitr', sans-serif;
  }
  </style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
  </div>
  <div class="navbar-header">
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="forvorite.php">เพลงที่ถูกใจ</a> 
</div>
<h6 align ='left'><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></h6>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="#">MUSIC BETA</a></li>
      <li><a href="#">เกี่ยวกับ</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="เพลง..." aria-label="Search"/>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="webpage.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>   
    </ul>
    <div id="results"></div>
  </div>
</nav>
  
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


    <h1> คิวเพลง </h1>
    <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">1.</a>
    </a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">2.</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">3.</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">4.</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">5.</a>
  </div>
 
  
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="js/youtube.js"></script>
  <script src="https://apis.google.com/js/client.js?onload=init"></script>
  <script src="https://use.fontawesome.com/b4561866ad.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>