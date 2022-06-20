<?php
session_start();
//if (!isset($_SESSION['username'])){
//    header('location:login.php');
//}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Home Page</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <a class="float-right" href="logout.php">Logout</a>
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
        <a class="btn btn-outline-info btn-block" href="users.php">View All Users</a>
    </div>

</body>
</html>
