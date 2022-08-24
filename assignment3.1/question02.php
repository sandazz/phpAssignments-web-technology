<?php
$inputString= "java";
$arrayOfInput= str_split($inputString);
 
for($i=0; $i<strlen($inputString); $i++){
    $count = 1;
    for($j=$i+1; $j<strlen($inputString); $j++){
        if($arrayOfInput[$i]==$arrayOfInput[$j]){
            $count++;
        }
    }
    if($count>=2){    
        echo "input string was ".$inputString."<br>";
        echo "output : ".$arrayOfInput[$i]."<br>";
    }
}


?>