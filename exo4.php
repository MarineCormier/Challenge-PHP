<?php
function exo4($tab4){
	$i = 0;
	$result = "";
	while($i < count($tab4)){
	if(strlen($result) < strlen($tab4[$i])){
	$result = $tab4[$i];
}
	$i++;
}
	return $result;
}
?>