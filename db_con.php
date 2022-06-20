<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "userregistration";

//connect to the db
$con = mysqli_connect($host,$user,$password,$dbName);

//check if the connection failed to stop any further processes

if (!isset($con)){
    die("DB connection failed");
}