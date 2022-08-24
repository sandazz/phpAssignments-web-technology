<?php
$arrayOfVowels = array("a","e","i","o","u","A","E","I","O","U");
$inputString = "Professional Practice";
$arrayOfInput = str_split($inputString);
$count = 0;

for($i=0; $i<strlen($inputString); $i++){
    
    for($j=0; $j<10; $j++){
        if($arrayOfInput[$i]==$arrayOfVowels[$j] ){
            $count++;
        }
    }

}
echo "vowel count is ".$count."<br>";


?>