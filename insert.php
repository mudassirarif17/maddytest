<?php 
include('./connection.php');

if(isset($_POST['sbt'])){
    $name = $_POST['name'];
$man = $_POST['manager'];

$q = "insert into categories (name , parent_id) values ('$name' , '$man')";

$result = mysqli_query($con , $q);

if(!$result){
    die("Query Failed");
}else{
    // echo "Query Success";
    header('location:./index.php');
}
}


?>