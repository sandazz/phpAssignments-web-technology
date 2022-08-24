<?php
 $states = array("karnataka" => array ( "population" => "1135000", "captial" => "Bangalore"),

            "Tamil Nadu" => array( "population" => "1790000", "captial" => "Chennai"), 

            "Andhra Pradesh" => array("population" => "2135000", "captial" => " Hyderabad "), 

            "Goa" => array("population" => "835000", "captial" => " Panaji") );


function  findHighestPopulation($mycountry){
    $maxPopulation = (int)$mycountry["karnataka"]["population"];
    foreach($mycountry as $x=>$x_value){
        if($maxPopulation<(int)$mycountry["$x"]["population"])
            $maxPopulation = (int)$mycountry["$x"]["population"];
    }
    echo "The Highest Population state is ".$maxPopulation;
}

findHighestPopulation($states);

?>