<a href="add.php">add product</a><br><br>
<?php
$products = simplexml_load_file("products.xml");
?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>action</th>
    </tr>
<?php foreach($products->product as $product){?>
    <tr>
        <td><?php echo $product['id']?></td>
        <td><?php echo $product->name?></td>
        <td><?php echo $product->price?></td>
        <td><a href="edit.php?id=<?php echo $product['id']?>">edit</a>&nbsp;
    <a href="index.php?action=delete&amp;id=<?php echo $product['id'];?>">delete</a>
    </td>

    </tr>
<?php }?>
</table>

<?php
if(isset($_GET['action']) and $_GET['action']=='delete'){
    $id = $_GET['id'];
    $index = 0;
    $i = 0;

    foreach($products->product as $product){
        if($product['id']==$id){
            $index = $i;
            break;
        }
        $i++;
    }
    unset($products->product[$index]);
    file_put_contents('products.xml',$products->asXML());
    header("Location: index.php");
}

?>