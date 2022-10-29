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
if(isset($_POST["step"]) and $_POST["step"] == 1  ){
    displayStep02();
}elseif(isset($_POST["step"]) and $_POST["step"] == 2 and (isset($_POST["order"]))  ){
    displayStep03();
}elseif(isset($_POST["back"])){
    displayStep01();
}else{
    displayStep01();
}

?>

<?php function displayStep01(){ ?>
<!--step 01 -->

<form method="post" action="test01.php">
    <input type="hidden" name="step" value="1">
    <h1>incredible foods : your details : step 01</h1>

    <p>
    <label>Name
    <input type="text" name="name" >
    </label> 
    </p>

    <p>
    <label>mobile 
    <input type="tel" name="mobile">
    </label>
    </p>

    <p>
    <label>Address
    <textarea name="address" maxlength="500"></textarea>
    </label>
    </p>

    <p><input type="hidden" name="pizza" id="pizza" value="pizza" onclick="chkPizza()"><label id="pizzaQty"></label></p>
    <p><input type="hidden" name="burger" id="burger" value="burger" onclick="chkBurger()"><label id="burgerQty"></label></p>

    <input type="submit" name="next" value="next">
    <input type="hidden" name="back" value="back">
    <input type="hidden" name="order" value="place order">

</form>
<?php } ?>



<?php function displayStep02(){ ?>
<!--step 02 -->

<form method="post" action="test01.php">
    <input type="hidden" name="step" value="2">

    <h1>incredible foods : order details : step 02</h1>

    <p>
    <input type="hidden" name="name" >
    </p>

    <p>
    <input type="hidden" name="mobile">
    </p>

    <p><label> <input type="checkbox" name="pizza" id="pizza" value="pizza" onclick="chkPizza()"> Pizza </label><label id="pizzaQty"></label></p>
    <p><label> <input type="checkbox" name="burger" id="burger" value="burger" onclick="chkBurger()"> Burger </label><label id="burgerQty"></label></p>

    <input type="hidden" name="next" value="next">
    <input type="submit" name="back" value="back">
    <input type="submit" name="order" value="place order">

</form>
<?php } ?>


<?php function displayStep03(){ ?>
<!--step 03 -->

<form method="post" action="test01.php">
    <input type="hidden" name="step" value="3">

    <h1>incredible foods : Thank You : step 03</h1>

    <p>
    <input type="hidden" name="name" >
    </p>

    <p>
    <input type="hidden" name="mobile">
    </p>

    <p><input type="hidden" name="pizza" id="pizza" value="pizza" onclick="chkPizza()"><label id="pizzaQty"></label></p>
    <p><input type="hidden" name="burger" id="burger" value="burger" onclick="chkBurger()"><label id="burgerQty"></label></p>

    <input type="hidden" name="next" value="next">
    <input type="hidden" name="back" value="back">
    <input type="hidden" name="order" value="place order">

</form>
<?php } ?>



 <script type="text/javascript">
    function chkPizza(){
        var pizzaSelect = document.getElementById("pizza");
        if(pizzaSelect.checked == true){
            document.getElementById("pizzaQty").innerHTML = "<input type='text' name='qtyPizza'>";
        }else{
            document.getElementById("pizzaQty").innerHTML = "";
        }
    }

    function chkBurger(){
        var burgerSelect = document.getElementById("burger");
        if(burgerSelect.checked == true){
            document.getElementById("burgerQty").innerHTML = "<input type='text' name='qtyBurger'>";
        }else{
            document.getElementById("burgerQty").innerHTML = "";
        }
    }

 </script>   
</body>
</html>