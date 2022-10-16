<?php
    $host = "localhost";
    $user_name = "root";
    $password = "";
    $dbs_name = "sample01";
    $connect  = mysqli_connect($host, $user_name, $password, $dbs_name);
    if($connect -> connect_error){
        echo "not connected";
    }else{
    }

?>