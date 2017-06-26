<?php 

// On définit les cuissons et les viandes, et on crée un tableau vide.

$cuissons = ["à point", "bleu", "saignant","bien cuit"];
$viandes = ["Poulet","Boeuf","Mouton"];
$commandes =[];
    
print_r($cuissons);
print_r($viandes);

// Pour chaque viande, on crée une commande cuisson de viande que l'on met dans le tableau vide

foreach ($viandes as $viande) {
    foreach ($cuissons as $cuisson) {
        array_push ( $commandes, $viande.""." "."".$cuisson."/" );
    }
}

// On affiche le tableau commande
 
    foreach ($commandes as $commande) {
        echo $commande ;
}
?>

<?php

// On définit les chaines de caractères

$genres = "horreur fantastique action western thriller comédie drame romance historique";

// On crée le tableau tag qui contient les valeurs de la chaine genres

$tag = explode(" ", $genres);


print_r($tag);

?>

<?php

$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];
$reversed = array_reverse($fruits);
$fruitsfavoris = array();

$mode = current($reversed);
$mode2 = next($reversed);
array_push ($fruitsfavoris, $mode, $mode2);
print_r($fruitsfavoris);


?>