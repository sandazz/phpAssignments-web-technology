<form action="" method = "post">
Id : <input type="text" name="id" id=""><br><br>
Name : <input type="text" name="name" id=""><br><br>
Price : <input type="text" name="price" id=""><br><br>
&emsp; <input type="submit" value="submit" name="save">

</form>

<?php
if(isset($_POST["save"])){
    $products = simplexml_load_file("products.xml");
    $product = $products->addChild("product");
    $product -> addAttribute("id",$_POST["id"]);
    $product-> addChild("name",$_POST["name"]);
    $product-> addChild("price",$_POST["price"]);

    file_put_contents('products.xml',$products->asXML());
    header("location: add.php");
}

?>