<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "maddytest";

$con = mysqli_connect($server , $user  , $password , $database);
if(!$con){
    die("Not Connected to database".mysqli_connect_error());
}
else{
    // echo "Successfully connected";
}


?>

