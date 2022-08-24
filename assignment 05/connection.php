<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname= "sample";

$connect = mysqli_connect($host,$user,$password,$dbname);

if($connect->connect_error){
    die("connection failed:". $connect->connect_error);
}

?>