<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Page</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<a class="float-right btn btn-secondary" href="registration.php">Add User</a>
<h1 class="text-info text-center">All Users</h1>
<table class="table table-hover table-dark">
    <tr>
        <th>Name</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //Connect to the database to fetch all the users
    require "db_con.php";

    //Prepare the select query to fetch users
    $selectQuery = "SELECT * FROM `usertable` WHERE 1";

    //Finally, grab the user using mysqli_query
    $usertable = mysqli_query($con, $selectQuery);

    //Use a loop to display all the users
    foreach ($usertable as $user){
        $name = $user["name"];
        $password = $user["password"];
        echo "<tr>
                <td>$name</td>
                <td>$password</td>
                <td><a class='btn btn-danger' href='delete.php?u_name=$name'>Delete</a></td>
                <td><a class='btn btn-info' href='update.php?u_name=$name&u_pass=$password'>Update</a></td>

            </tr>";
    }
    ?>

</body>
</html>