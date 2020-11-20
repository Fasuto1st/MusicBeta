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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MUSIC BETA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">หน้าหลัก</a></li>
      <li><a href="#">เกี่ยวกับ</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="forvorite.php">เพลงที่ถูกใจ</a>
  <a href="Album.php">อัลบั้ม</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; คอลเลกชัน</span>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<audio controls id="song">
    <source src="last_chance.mp3" type="audio/mpeg">
  </audio>

  <div id="player">
    <div id="cover"></div>

    <div class="display">
      <div id="songTitle">
        <h1 class="info">ชื่อเพลง</h1>
        <h3 class="info">ศิลปิน</h3>
        <p class="info">อัลบั้ม</h4>
      </div>
      <div id="toolBar">
        <div><i class="tool fa fa-2x fa-share-square-o" aria-hidden="true"></i></div>
        <div id="star"><i class="tool fa fa-2x fa-star" aria-hidden="true"></i></div>
        <div id="heart"><i class="tool fa fa-2x fa-heart" aria-hidden="true"></i></div>
      </div>
    </div>

    <div id="progressBar">
      <div class="w3-progress-container">
        <div id="bar" class="w3-progressbar w3-round w3-green" style="width:0%"></div>
      </div>
    </div>
    

    <div id="control">
      <div id="stop"><i class="fa fa-2x fa-stop" aria-hidden="true"></i></div>
      <div id="pause"><i class="fa fa-2x fa-pause" aria-hidden="true"></i></div>
      <div id="play"><i class="fa fa-2x fa-play" aria-hidden="true"></i></div>
      <div id="backward"><i class="fa fa-lg fa-backward" aria-hidden="true"></i></div>
      <div id="forward"><i class="fa fa-lg fa-forward" aria-hidden="true"></i></div>
      <div id="random"><i class="fa fa-random" aria-hidden="true"></i></div>
    </div>

  </div>

    <h1> คิวเพลง </h1>
    <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">1.</a>
    </a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">2.</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">3.</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">4.</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">5.</a>
  </div>
 
  
  <script src="https://use.fontawesome.com/b4561866ad.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="app.js"></script>
</body>
</html>
