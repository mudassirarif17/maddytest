<?php 

// Maddy code
include('./connection.php');


if(isset($_POST['sbt'])){
    $name = $_POST['name'];
    $p_id = $_POST['p_id'];

    if($p_id == "NULL"){
        $q = "insert into categories (name) values ('$name')";
    }else{
        $q = "insert into categories (name , p_id) values ('$name' , '$p_id')";
    }
    
    

    $result = mysqli_query($con , $q);

    if(!$result){
        die("Query Failed");
    }else{
        echo "Query Success";
        header('location:./index.php?msg=Field Insert');
    }
}
?>