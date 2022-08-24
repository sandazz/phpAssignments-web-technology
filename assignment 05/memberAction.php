<?php 
include("connection.php");
if(isset($_POST["submit"])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $job_title = $_POST['jobtitle'];

    $query = "INSERT INTO user_info(first_name,last_name,address,job_title) VALUES('$first_name','$last_name','$address','$job_title');";

    if($connect->query($query)){
        header ("location: index.php");
    }else{
        echo "connection error: ".$connect->connect_error;
    }

}

if(isset($_POST["update"])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $job_title = $_POST['jobtitle'];
    $id = $_POST['id'];

    $query = "UPDATE user_info SET first_name='$first_name',last_name='$last_name',address='$address',job_title='$job_title' WHERE id=$id;";

    if($connect->query($query)){
        header ("location: index.php");
    }else{
        echo "connection error: ".$connect->connect_error;
    }

}



?>