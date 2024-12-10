<?php 
include('./connection.php');


if(isset($_POST['sbt'])){
    $name = $_POST['name'];
    $p_id = $_POST['p_id'];
    echo $name."<br>";  
    echo $p_id."<br>";  
    if (empty($p_id)) {
        $p_id = NULL;
    }
    echo $p_id."<br>";  


    $q = "insert into categories (name) values ('$name')";

$result = mysqli_query($con , $q);

if(!$result){
    die("Query Failed");
}else{
    echo "Query Success";
    // header('location:./index.php?msg=Field Insert');
}
}


?>