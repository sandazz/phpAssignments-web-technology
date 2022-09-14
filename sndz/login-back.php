<?php
include ("dbs.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE email = '$email';";
    $result = mysqli_query($connect,$sql);
    $row_num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($email == $row['email'] && $password == $row['password']){
        echo "valid login";
    }


}
?>