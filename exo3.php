<?php

function exo3($tab3) {
$reversed = array_reverse($tab3);
$fruitsfavoris = array();

$mode = current($reversed);
$mode2 = next($reversed);
array_push ($fruitsfavoris, $mode, $mode2);

return($fruitsfavoris);
}

?>