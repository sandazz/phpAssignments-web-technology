<?php
$dbSever = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "E-store";

$connect = mysqli_connect($dbSever,$dbUserName,$dbPassword,$dbName);

if($connect){

}else{
    echo "connection error";
}
?>