<?php
//Check if the update button is clicked
if (isset($_POST["btn_update"])){

    //Receive the updated data from form
    $updatedName = $_POST["u_name"];
    $updatedPassword = $_POST["u_pass"];

    //Connect to the database to return the data
    require_once "db_con.php";

    //Create the update query
    $updateQuery = "UPDATE `usertable` SET `name`='$updatedName',`password`='$updatedPassword' WHERE name='$updatedName'";

    //Finally, execute the update query by use of mysqli_query()
    $update = mysqli_query($con, $updateQuery);

    //Check if the update was successful
    if (isset($update)){

        //Redirect the user to users.php to see changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }
}
