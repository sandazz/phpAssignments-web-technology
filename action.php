<?php
include("dbs.php");

if(isset($_POST["add"])){
    $first_name = $_POST["f_name"];
    $last_name = $_POST["l_name"];
    $address = $_POST["address"];
    $job = $_POST["job"];

    $sql_query = "INSERT INTO members(firstname, lastname, address, job) VALUES ('$first_name','$last_name', '$address','$job');";
    $connect -> query($sql_query);

    header("location: index.php");
}

if(isset($_POST["update"])){
    $id = $_POST['id'];
    $first_name = $_POST["f_name"];
    $last_name = $_POST['l_name'];
    $address = $_POST['address'];
    $job = $_POST['job'];

    $sql_query = "UPDATE members SET firstname = '$first_name', lastname = '$last_name', address = '$address', job = '$job' WHERE id = $id ;";
    $connect->query($sql_query);
    header("location:index.php");
}

if(isset($_GET['action']) and $_GET["action"] == "del"){
    $id = $_GET['id'];
    $sql_query = "DELETE FROM members WHERE id = $id ;";
    $connect -> query($sql_query);
    header("location:index.php");
}
?>