<?php
session_start();
header('location:login.php');

//$con = mysqli_connect('localhost','root','','userregistration');
//mysqli_select_db($con, 'userregistration');
include "db_con.php";

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM `usertable` WHERE name  = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "username Already Taken";
}else{
    $reg = "INSERT INTO `usertable`(`name`, `password`) VALUES ('$name','$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}