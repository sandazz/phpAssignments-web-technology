<?php
include('dbs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic crud</title>
</head>
<body>
<?php
        $first_name = "";
        $last_name = "";
        $address = "";
        $job = "";
        $id = "";
        $update = false;
        if(isset($_GET['action']) and $_GET['action']=="edit"){
            $id = $_GET["id"];
            $update = true;
            $sql_query = "SELECT * FROM members WHERE id =$id;";
            $result = $connect->query($sql_query);
            if($result->num_rows==1){
                $n = $result-> fetch_row();
                $id = $n[0];
                $first_name = $n[1];
                $last_name = $n[2];
                $address = $n[3];
                $job = $n[4];
            }
        }
 ?>
    <div>
        <h1>Member Details</h1>
       <?php
       $sql_query = "SELECT * FROM members;";
       $result = $connect->querY($sql_query);
       ?>
        <div>
            <table>
                <tr>
                    <th>id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Address</th>
                    <th>Job Title</th>
                    <th>Action</th>
                </tr>
                <?php
                if($result){
                    while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['firstname']?></td>
                    <td><?php echo $row['lastname']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['job']?></td>
                    <td><a href="index.php?action=edit&amp;id=<?php echo $row['id'];?>">edit</a>&emsp; 
                    <a href="action.php?action=del&amp;id=<?php echo $row['id']; ?>">del</a></td>
                </tr>
                <?php
                    }
                } 
                ?>
            </table>
        </div>
    </div>

    <div>
        <h1>Add Members</h1>
        <div>
            <form action="action.php" method = "post">
                <input type="hidden" name="id", value="<?php echo $id; ?>">
                <span>First Name :</span><input type="text" name="f_name" id="" value="<?php echo $first_name; ?>"><br>
                <span>Last Name :</span><input type="text" name="l_name" id="" value="<?php echo $last_name; ?>"><br> 
                <span>Address :</span><input type="text" name="address" id="" value="<?php echo $address; ?>"><br>
                <span>Job Title :</span><input type="text" name="job" id="" value="<?php echo $job; ?>"><br>
                <?php if($update) { ?>
                <input type="submit" value="update" name = "update">
                <?php } else { ?>
                <input type="submit" value="add" name = "add">
                <?php } ?>
            </form>
        </div>
    </div>
</body>
</html>