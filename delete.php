<?php
//check if the delete button has been clicked
if (isset($_GET["u_name"])){
    //Now receive the name from the url
    $name = $_GET["u_name"];

    //Connect to the database to delete
    require_once "db_con.php";

    //Create a delete query
    $deleteQuery = "DELETE FROM `usertable` WHERE name ='$name'";

    //Finally, delete using the mysqli_query
    $delete = mysqli_query($con, $deleteQuery);

    //Check if the deletion was successful
    if (isset($delete)){
        //Redirect the user back to your users.php file
        header("location:users.php");
    }else{
        echo "deletion failed";
    }
}