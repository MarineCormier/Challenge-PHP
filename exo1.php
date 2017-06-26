<?php 

function exo1($tab1, $tab2) {

$commandes =[];

foreach ($tab1 as $value1) {
    foreach ($tab2 as $value2) {
        array_push($commandes, $value2. " " .$value1);
    }
}
return ($commandes);
}

 ?>

