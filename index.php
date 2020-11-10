<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewpot" content="width=device-width, inital-scale=1.0">
    <title>Home page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="header">
        <h2>หน้าหลัก</h2>
    </div>
    <div class="content">
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome<strong><?php echo $_SESSION['username']; ?></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>

</body>
</html>