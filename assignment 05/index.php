<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $query = "SELECT * FROM user_info;";
    $result  = $connect->query($query);
    ?>

<table style="border: 2px solid">
    <thead><th>id</th><th>first name</th><th>last name</th><th>address</th><th>job title</th><th>actions</th></thead>
    <?php 
    if($result){
        while($row = $result->fetch_assoc()){
    
    ?>

    <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["first_name"]?></td>
        <td><?php echo $row["last_name"]?></td>
        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["job_title"]?></td>
        <td><a href="index.php?action=edit&amp;id=<?php echo $row['id']?>">edit</a></td>
        <td><a href="index.php?action=delete&amp;id=<?php echo $row['id']?>">delete</a></td>



    </tr>
    <?php
    }}
?>
</table>

<?php
$first_name="";
$last_name="";
$address="";
$job_title="";
$id="";
$update=false;
$delete = false;

if(isset($_GET['action']) and $_GET['action']=="edit"){
    $id = $_GET['id'];
    $update = true;

    $query = "SELECT * FROM user_info WHERE id = $id;";

    $result = $connect->query($query);

    if($result->num_rows==1){
        $n = $result -> fetch_assoc();
        $first_name = $n['first_name'];
        $last_name = $n['last_name'];
        $address = $n['address'];
        $job_title = $n['job_title'];
    }
}

if(isset($_GET['action']) and $_GET['action']=="delete"){
    $id = $_GET['id'];
    $query = "DELETE FROM user_info WHERE id = $id;";
    $connect->query($query);
    header("location:index.php");

}




?>


    <h3>Add Member</h3>
    <form action="memberAction.php" method ="post">
        First name : <input type="text" name="firstname" id="firstname"  placeholder="first name" value="<?php echo $first_name ?>"><br>
        Last name  : <input type="text" name="lastname" id="lastname" placeholder="last name" value="<?php echo $last_name ?>"><br>
        Address    : <input type="text" name="address" id="address" placeholder="address" value="<?php echo $address ?>"><br>
        Job Title  : <input type="text" name="jobtitle" id="jobtitle" placeholder="job" value="<?php echo $job_title ?>"><br>
        <input hidden type="text" name="id" id="jobtitle" placeholder="job" value="<?php echo $id ?>"><br>
        <center>
            <?php
            if(isset($_GET['action']) and $_GET['action']=="edit"){?>
                <input type="submit" name="update" id="value" value="update">
<?php
}
?>
    <input type="submit" name="submit" id="submit">
</center>
    </form>
</body>
</html>

